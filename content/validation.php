<?php
$value = $_GET['query'];
$field = $_GET['field'];

//Cek Validasi
if($field == "username")
{
	if(strlen($value) < 4)
	{
		echo "Harus lebih dari 3 huruf";
	}
	else
	{
		echo "<span>Valid</span>";
	}
}

if($field == 'password')
{
	if(strlen($value) < 6)
	{
		echo "Password terlalu pendek";
	}
	else
	{
		echo "<span>Valid</span>";
	}
}

if($field == 'email')
{
	if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value))
	{
		echo "Format email salah!";
	}
	else
	{
		echo "<span>Valid</span>";
	}
}

if($field == 'website')
{
	if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $value)) //cek karakter
	{
		echo "Website tidak valid";
	}
	else
	{
		echo "<span>Valid</span>";
	}
}
