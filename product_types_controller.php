<?php

function set_product_type($name, $tax_percent) {
    global $db;
    if (
        $db->insert('product_types', [
            'name'        => $name,
            'tax_percent' => $tax_percent
        ])
    ) {
        //return last id
        return $db->id();
    } else {
        $db->error;
    }
}

function get_product_types() {
    global $db;
    return $db->select('product_types', "*");
}

function get_product_type($id) {
    global $db;
    return $db->select('product_types', "*", ["id" => $id]);
}

function delete_product_type($id) {
    global $db;
    return $db->delete('product_types', ["id" => $id]);
}