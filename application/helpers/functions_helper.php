<?
/*
	генерирует ассоциативный массив для селекта
	принимает массив объектов, в котором должны быть поля option и value
*/
function generete_assoc($data)
{
	$result = array();
	foreach ($data as $option)
	{
		if (!isset($option->option) or !isset($option->value)) {
			return $result;
		}
		$result[$option->value] = $option->option;
	}
	
	return $result;
}

function generate_types_of_cities()
{
	return array(
		'місто' => 'місто',
		'село' => 'село',
	);
}