<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
/*
    (c) MaxSite CMS, http://max-3000.com/
*/

// условие вывода компонента
// php-условие как в виджетах
if ($rules = trim(mso_get_option('any1_rules_output', getinfo('template'), '')))
{
	$rules_result = eval('return ( ' . $rules . ' ) ? 1 : 0;');
	if ($rules_result === false) $rules_result = 1;
	if ($rules_result !== 1) return;
}

$opt = mso_get_option('any1_block', getinfo('template'), '');

// используем php-шаблонизатор
eval(mso_tmpl_prepare($opt));

# end of file