<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupPermissionController extends Controller
{
    /**
    * Display a listing of permissions in the specified group + admin ui to edit permissions
    *
    * @return Response
    */
    public function index(Request $request, Group $group)
    {
        $this->authorize('administer', $group);

        $custom_permissions = $group->getSetting('custom_permissions', false);

        if ($custom_permissions)  {
            $permissions = $group->getSetting('permissions');

            $member = collect($permissions['member']);
        }
        else {
            $member = collect(['create-discussion', 'create-action', 'create-file', 'invite']);
        }

        // curently admin can do it all
        $admin = collect(['create-discussion', 'create-action', 'create-file', 'invite']);



        return view('permissions.index')
        ->with('member', $member)
        ->with('admin', $admin)
        ->with('custom_permissions', $custom_permissions)
        ->with('group', $group)
        ->with('tab', 'admin');
    }


    public function update(Request $request, Group $group)
    {
        $this->authorize('administer', $group);

        // admin enabled custom permissions :
        if ($request->has('custom_permissions')) {

            $group->setSetting('custom_permissions', true);


            $member = collect();

            foreach ($request->get('member') as $member_perm)
            {
                $member->push($member_perm);
            }


            // todo filter with only allowed values here
            $permissions['member'] = $member->toArray();

            $group->setSetting('permissions', $permissions);
        }
        else {
            $group->setSetting('custom_permissions', false);
        }
        
        $group->save();

        flash(trans('messages.ressource_updated_successfully'));

        return redirect()->route('groups.permissions.index', $group);

    }

}
