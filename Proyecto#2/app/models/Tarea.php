<?php

class Tarea extends Eloquent
{
	protected $table = 'tarea';
	protected $fillable = array('titulo', 'descripcion', 'prioridad','id_user','estado');
	protected $guarded  = array('id');
	public    $timestamps = false;

	public static function tareasDisponibles($id)
	{
		$sql = "select t.id, t.titulo, t.descripcion, t.prioridad, t.id_user, t.estado
		        from tarea t 
                inner join users u on u.id = t.id_user and u.id = $id";
		return DB::select($sql);
	}

	public static function cambiarEstado($id,$estado)
	{
		$sql = "UPDATE tarea SET estado = $estado WHERE id=$id ";
		return DB::update($sql);
	}
}