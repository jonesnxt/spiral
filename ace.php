<!DOCTYPE html>
<html lang="en">
<head>
<title>ACE in Action</title>
<style type="text/css" media="screen">
    #editor { 
        position: absolute;
        width: 500px;
		height: 200px;
    }
</style>
</head>
<body>

<div id="editor">function foo(items) {
    var x = "All this is syntax highlighted";
    return x;
}</div>
    
<script src="ace/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/eclipse");
    editor.getSession().setMode("ace/mode/c_cpp");
</script>
</body>
</html>