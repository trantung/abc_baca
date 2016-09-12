<?php
class Common {
	
	public static function selectRoleId()
	{
		return array(
			'' => '-- Lựa chọn',
			ADMIN => 'ADMIN',
			EDITOR => 'EDITOR',
			SEO => 'SEO',
		);
	}
	public static function getRole($roleId) {
		$role = array(
			ADMIN => 'ADMIN',
			EDITOR => 'EDITOR',
			SEO => 'SEO',
		);
		return $role[$roleId];
	}

	public static function selectStatus()
	{
		return array(
			ACTIVE => 'Hiện',
			INACTIVE => 'Ẩn'
		);
	}
	public static function labelStatus($status)
	{
		$arr = self::selectStatus();
		if(in_array($status, [ACTIVE,INACTIVE])) {
			return $arr[$status];
		}
		return '';
	}

	public static function selectBlock()
	{
		return array(
			BLOCK_1 => 'Box nổi bật trên',
			BLOCK_2 => 'Box nổi bật dưới'
		);
	}
	public static function labelBlock($type)
	{
		$arr = self::selectBlock();
		if(in_array($type, [BLOCK_1,BLOCK_2])) {
			return $arr[$type];
		}
		return '';
	}

}