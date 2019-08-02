<?php
// DataTables PHP library
include("lib/DataTables.php");

// Alias Editor classes so they are easy to use
use
    DataTables\Editor,
    DataTables\Editor\Field,
    DataTables\Editor\Format,
    DataTables\Editor\Mjoin,
    DataTables\Editor\Options,
    DataTables\Editor\Upload,
    DataTables\Editor\Validate;

// Build our Editor instance and process the data coming from _POST
Editor::inst($db, 'secretario', 'id')
    ->fields(
        Field::inst('num_doc'),
        Field::inst('tipo_doc'),
        Field::inst('nombre'),
        Field::inst('apellido'),
        Field::inst('cargo'),
        Field::inst('dependencia'),
        Field::inst('departamento'),
        Field::inst('municipio'),
        Field::inst('telefono'),
        Field::inst('email'),
        Field::inst('usuario'),
        Field::inst('pass'),
        Field::inst('sexo'),
        Field::inst('img')
    )
    ->process($_POST)
    ->json();
