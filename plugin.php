<?php
/**
* Plugin Name: Two Column Data
* Description: Simple Two Column Data
* Version: 1.0
* Author: rjoaquin
**/


function the_table ( $content ) {
    return $content .= '<table>
    <tr><th>Column 1</th><th>Column 2</th<</tr>
    <tr><td>Column 1 Text 1</td><td>Column 2 Text 1</td></tr>
    <tr><td>Column 1 Text 2</td><td>Column 2 Text 2</td></tr>
    </table>';
}

add_action( 'the_content', 'the_table' );
