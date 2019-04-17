<?php

namespace App\Http\Controllers;

use App\Building;
use App\Http\Requests\BuildingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Yajra\Datatables\Datatables;

class BuildingController extends Controller
{
    public function index()
    {
        return view('admin.building.index');
    }

    public function create()
    {
        return view('admin.building.add');
    }

    public function edit(Building $building)
    {
        return view('admin.building.edit', compact('building'));
    }

    public function update(Building $building, Request $request)
    {
        $building->fill($request->all())->save();
        return redirect('adminpanel/buildings')->withFlashMessage('successful operation');
    }

    public function destroy(Building $building)
    {
        $building->delete();

        return redirect('adminpanel/buildings')->withFlashMessage('successful operation');
    }

    public function store(BuildingRequest $request, Building $building)
    {
        $user = Auth::user();
        $data = [
            'name' => $request->name,
            'rooms' => $request->rooms,
            'type' => $request->type,
            'status' => $request->status,
            'meta' => $request->meta,
            'small_description' => $request->small_description,
            'long_description' => $request->long_description,
            'longitude' => $request->longitude,
            'Latitude' => $request->Latitude,
            'user_id' => $user->id,
            'square' => $request->square,
            'rent' => $request->rent,
            'price' => $request->price
        ];
        $building->create($data);
        return redirect('/adminpanel/buildings')->withFlashMessage('successful operation');
    }


    public function anyData(Building $building)
    {

        $buildings = $building->all();

        return Datatables::of($buildings)
            ->editColumn('name', function ($model) {
                return '<a href="' . url('/adminpanel/buildings/' . $model->id . '/edit') . '">' . $model->name . '</a>';
            })
            ->editColumn('type', function ($model) {
                $type = building_type();
                return '<span class="badge badge-info">' . $type[$model->type] . '</span>';
            })
            ->editColumn('status', function ($model) {
                return $model->status == 1 ? '<span class="badge badge-info">' . 'available' . '</span>' : '<span class="badge badge-warning">' . 'unavailable' . '</span>';
            })
            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/adminpanel/buildings/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';

                $all .= '<a href="' . url('/adminpanel/buildings/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';

                return $all;
            })
            ->rawColumns(['name', 'status', 'type', 'control'])
            ->make(true);

    }

    public function showAll(Building $building)
    {
        $buildings = $building->where('status', '1')->orderBy('id', 'desc')->paginate(15);

        return view('users.showAll', compact('buildings'));
    }

    public function rent($rent, Building $building)
    {
        $buildings = $building->where('rent', $rent)->orderBy('id', 'desc')->paginate(15);

        return view('users.showAll', compact('buildings'));
    }

    public function type($type, Building $building)
    {
        if (in_array($type, [0, 1, 2, 3])) {
            $buildings = $building->where('rent', $type)->orderBy('id', 'desc')->paginate(15);
            return view('users.showAll', compact('buildings'));
        } else {
            return Redirect::back();
        }
    }

    public function search(Request $request, Building $building)
    {
        $requestAll = array_except($request->toArray(), ['submit', '_token']);
        $query = Building::select('*');
        foreach ($requestAll as $key => $req) {
            if ($req != null) {
                $query->where($key, $req);
            }
        }
        $buildings = $query->paginate(15);
        return view('users.showAll', compact('buildings'));
    }
}
