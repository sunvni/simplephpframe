<?php

$css = <<<CSS
<style>
body {
    margin:0;
    font-family: "Open Sans",arial,x-locale-body,sans-serif;
    background: #ededed;
    width: 100%;
    height: 100%;
}
div {
  width: 300px;
  height: 80px;
  background-color: lightgreen;
}
menu {
    user-select: none;
}
menuitem{
    background: #c333;
    min-width: 50px;
    padding: 5px;
    border-radius: 1px;
    margin:0px;
    border: 1px solid #c333;
    text-align: center;
    font-family: fantasy;
    cursor: pointer;
    font-size: 12px;
    line-height: 14px;
}
menuitem:hover {
    color: white;
    background: black;
}
footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 3rem;
    line-height: 3rem;
    background-color: #f5f5f5;
}
footer p {
    line-height: 15px;
    color: #2F4F4F;
}
</style>
CSS;
echo compressCSS($css);
 