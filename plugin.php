<?php
/**
* Plugin Name: Very First Plugin
* Description: This is the very first plugin I ever created.
* Version: 1.0
* Author: Your Name Here
**/


function the_table ( $content ) {
    return $content .= '<table>
    <tr><th>Column 1</th><th>Column 2</th<</tr>
    <tr><td>Column 1 Text 1</td><td>Column 2 Text 1</td></tr>
    <tr><td>Column 1 Text 2</td><td>Column 2 Text 2</td></tr>
    </table>';
}

add_action( 'the_content', 'the_table' );
