<?php
// created: 2015-03-04 12:01:39
$dictionary["aok_knowledgebase_aok_knowledge_base_categories"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'aok_knowledgebase_aok_knowledge_base_categories' => 
    array (
      'lhs_module' => 'AOK_KnowledgeBase',
      'lhs_table' => 'aok_knowledgebase',
      'lhs_key' => 'id',
      'rhs_module' => 'AOK_Knowledge_Base_Categories',
      'rhs_table' => 'aok_knowledge_base_categories',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'aok_knowledgebase_aok_knowledge_base_categories_c',
      'join_key_lhs' => 'aok_knowle1a7bdgebase_ida',
      'join_key_rhs' => 'aok_knowle8c6degories_idb',
    ),
  ),
  'table' => 'aok_knowledgebase_aok_knowledge_base_categories_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'aok_knowle1a7bdgebase_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'aok_knowle8c6degories_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'aok_knowledgebase_aok_knowledge_base_categoriesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'aok_knowledgebase_aok_knowledge_base_categories_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'aok_knowle1a7bdgebase_ida',
        1 => 'aok_knowle8c6degories_idb',
      ),
    ),
  ),
);