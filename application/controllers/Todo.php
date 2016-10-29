<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Todo extends REST_Controller 
{

function __construct($config='rest')
	{
	parent::__construct($config);
	}

/**
* @api {get} /todo/id=? GET List Todo
* @apiName GetTodo
* apiGroup Todo
*
* @apiParam {Number} id Todo unique ID.
*
*/

function index_get()
	{
	$id = $this->get('id');
	if($id=='')
	{
		$todos = $this->db->get('task')->result();
	} else {
		$this->db->where('id',$id);
		$todos = $this->db->get('task')->result();
		}
	$this->response($todos,200);
	}

/**
* @api {post} /todo POST List Todo
* @apiName PostTodo
* apiGroup Todo
*
* @apiParam {Number} id Todo unique ID.
*
*/

function index_post()
	{
	$data = array (
		'task' => $this->post('task'),
		);
	$insert = $this->db->insert('task',$data);
	if($insert)
	{
		$this->response($data,200);
	} else {
		$this->response(array('status'=>'fail',502));
		}
	}

/**
* @api {put} /todo PUT List Todo
* @apiName PutTodo
* apiGroup Todo
*
* @apiParam {Number} id Todo unique ID.
*
*/

function index_put()
	{
	$id = $this->get('id');
	$data = array(
			'task' => $this->post('task'),
			'date' => $this->post('date')
		);
	$this->db->where('id',$id);
	$update = $this->db->update('task',$data);
	if($update)
	{
		$this->response($data,200);
	} else {
		$this->response(array('status' => 'fail', 502));
		}
	}

/**
* @api {delete} /todo DELETE List Todo
* @apiName DeleteTodo
* apiGroup Todo
*
* @apiParam {Number} id Todo unique ID.
*
*/

function index_delete()
{
	$id = $this->get('id');
	$data = array(
			'task' => $this->post('task'),
			'date' => $this->post('date')
		);
	$this->db->where('id',$id);
	$delete = $this->db->delete('task',$data);

	if($delete)
	{
		$this->response(array('status'=>'succes',200));
	} else {
		$this->response(array('status'=>'Fail',502));
	}
}

}

