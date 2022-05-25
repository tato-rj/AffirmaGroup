<?php

function lastchar($string)
{
	return substr($string, -1);
}

function lastnchar($string, $num)
{
	return substr($string, (-1 * $num));
}

function storage($path)
{
	if ($path)
		return asset(\Storage::url($path));

	return null;
}

function is_checked($option, $array)
{
	if ($array)
		return in_array($option, $array) ? 'checked' : null;
}