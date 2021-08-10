<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $indexVar = Worker::all();
        return view('worker.index')->with(['indexData'=>$indexVar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('worker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated=$request->validate([
            'userNumber'=>'required | unique:workers| min:6 |max:6',
            'name'=>'required |max:100',
            'position'=>'required |max:100',
            'number'=>'required |min:10|max:11',
            'email'=>'required | unique:workers'
        ]);

        $storeVar = $request->all(['userNumber','name','position','number','email']);
        Worker::create($storeVar);
        return redirect()->route('worker.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(Worker $worker)
    {
        //
        return view('worker.show')->with(['showVar'=>$worker]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit(Worker $worker)
    {
        //
        return view('worker.edit')->with(['editVar'=>$worker]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Worker $worker)
    {
        //
        $updateVar = $request->all(['userNumber','name','position','number','email']);
        Worker::where('id',$worker->id)->update($updateVar);
        return redirect()->route('worker.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worker $worker)
    {
        //

        $worker->delete();
        return redirect()->route('worker.index');
    }
}
