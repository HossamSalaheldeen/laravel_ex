<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{
    public function index()
    {
        $users = User::whereNotNull('manager_id')
            ->with('manager','childStaff')
            ->get();

        $users = User::get(['id', 'name','manager_id'])->map(function($user) {
            return array(
                'id' => $user->id,
                'name' => $user->name,
                'parent_id' => $user->manager_id,
                'parent' => $user->manager ? $user->manager->name : "null",
                'children' => UserResource::collection($user->staff),
            );
        })->toArray();


        $tree = $this->buildTree($users);
        $jsongFile = 'treeData.json';
        File::put(public_path('/dashboard/js/'.$jsongFile), json_encode($tree));
        dd(json_encode($tree));
        $tree = new \stdClass();

        foreach ($users as $user) {
            $tree->name = $user->name;
            $tree->parent = $user->manager ? $user->manager->name : null;
            if(count($user->childStaff)) {
                foreach ($user->childStaff as $childStaffPersons) {

//                dd($childStaffPersons);
                    if (count($childStaffPersons->staff)) {
                        foreach ($childStaffPersons->staff as $childStaffPerson) {
//                          dd($childStaffPerson);
                        }
                    }
                }
            }
        }

        dd($tree);
        return view('dashboard.users.index', compact('users'));
    }

    public function indexManagers()
    {
        $users = User::WhereNotNull('manager_id')
            ->with('manager')
            ->get();

        return view('dashboard.users.index-managers', compact('users'));
    }

    function buildTree(array $elements, $parentId = null) {
        $branch = array();

        foreach ($elements as $element) {
            if ($element['parent_id'] == $parentId) {
                $children = $this->buildTree($elements, $element['id']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[] = $element;
            }
        }

        return $branch;
    }
}
