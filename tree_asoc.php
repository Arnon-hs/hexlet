<?php 

$dfs = function($tree) use (&$dfs){
	['name' => $name , 'children' => $children] = $tree;
	  echo "$name \n";
    if (!$children) {
        return;
    }
    return array_map($dfs, $children);
};

$tree = [
  'name' => 'A',
  'children' => [
    [
      'name' =>  'B',
      'children' =>  [
        [ 'name' => 'E', 'children' => [] ],
        [ 'name' => 'F', 'children' => [] ],
      ],
    ],
    [ 'name' => 'C', 'children' => [] ],
    [
      'name' => 'D',
      'children' => [
        [ 'name' => 'G', 'children' => [] ],
        [ 'name' => 'J', 'children' => [] ],
      ],
    ],
  ],
];

$dfs($tree);