<?php
namespace Swoolefy\Core;

class ZModel {
	/**
	 * $_instance 工厂模式的单实例
	 * @var array
	 */
	public static $_model_instances = [];

	/**
	 * getInstance 获取model的单例
	 * @param   string  $class  类命名空间
	 * @return  object 
	 */
	public static function getInstance($class='') {
		$class = str_replace('/','\\',$class);
		$class = trim($class,'\\');
		if(is_object(static::$_model_instances[$class])) {
            return static::$_model_instances[$class];
        }
		static::$_model_instances[$class] = new $class();
        return static::$_model_instances[$class];
	}
}