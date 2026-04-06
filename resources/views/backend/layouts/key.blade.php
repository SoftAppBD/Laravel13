@php
    $tag_div = 'div';
    $tag_style = 'style';
    $tag_font = 'font';
    $tag_a = 'a';
    $cls_attr = 'class';
    $href_attr = 'href';
    $tgt_attr = 'target';
    $wrapper_cls = 'float-right d-none d-sm-block';
    $link_cls = 'ex1 animate-text softappbd';
    $hover_sel = 'a.ex1:hover, a.ex1:active';
    $hover_rule = 'color: rgb(111, 0, 255) !important;';
    $font_color = 'color: rgb(248, 10, 109)';
    $D = 'Dog';
    $e = 'egg';
    $v = 'van';
    $l = 'lion';
    $o = 'owl';
    $p = 'pen';
    $d = 'duck';
    $B = 'Ball';
    $y = 'yak';
    $label =
        substr($D, 0, 1) .
        substr($e, 0, 1) .
        substr($v, 0, 1) .
        substr($e, 0, 1) .
        substr($l, 0, 1) .
        substr($o, 0, 1) .
        substr($p, 0, 1) .
        substr($e, 0, 1) .
        substr($d, 0, 1) .
        ' ' .
        substr($B, 0, 1) .
        substr($y, 0, 1);

    $S = 'Sun';
    $o2 = 'owl';
    $f = 'fish';
    $t = 'tree';
    $A = 'Apple';
    $p2 = 'pen';
    $B2 = 'Ball';
    $D2 = 'Dog';
    $link_text =
        substr($S, 0, 1) .
        substr($o2, 0, 1) .
        substr($f, 0, 1) .
        substr($t, 0, 1) .
        substr($A, 0, 1) .
        substr($p2, 0, 1) .
        substr($p2, 0, 1) .
        substr($B2, 0, 1) .
        substr($D2, 0, 1);
    $href = base64_decode('aHR0cHM6Ly9zb2Z0YXBwYmQuY29t');
    $style_block = '<' . $tag_style . '>' . $hover_sel . ' { ' . $hover_rule . ' }' . '</' . $tag_style . '>';
    $font_open = '<' . $tag_font . ' ' . $tag_style . '="' . $font_color . '">';
    $font_close = '</' . $tag_font . '>';
    $link_open =
        '<' .
        $tag_a .
        ' ' .
        $cls_attr .
        '="' .
        $link_cls .
        '" ' .
        $href_attr .
        '="' .
        $href .
        '" ' .
        $tgt_attr .
        '="_blank" style="color: red;">';
    $link_close = '</' . $tag_a . '>';
    $div_open = '<' . $tag_div . ' ' . $cls_attr . '="' . $wrapper_cls . '">';
    $div_close = '</' . $tag_div . '>';
    $html =
        $div_open .
        $style_block .
        $font_open .
        $label .
        ' : &nbsp;' .
        $font_close .
        $link_open .
        $link_text .
        $link_close .
        $div_close;
    echo $html;
@endphp
