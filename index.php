<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>

    <style>
        #testing {
            width: 300px;
            margin: 100px;
        }

        span {
            background: none repeat scroll 0 0 #CCCCCC;
            border-radius: 3px 3px 3px 3px;
            box-shadow: 0 0 5px #7f7f7f;
            font-size: 16px;
            cursor: pointer;
        }
    </style>

    <script>
        function updateSelectedText(){
        	var selectedText = '';
        	if (window.getSelection) {
                selectedText = window.getSelection();
        	} else if (document.getSelection) {
                selectedText = document.getSelection();
        	} else if (document.selection) {
                selectedText = document.selection.createRange().text;
        	}

            var old_text = jQuery("#testing").text();
            var new_text = '<span>' + selectedText + '</span>';
            jQuery("#testing").html(old_text.replace(selectedText, new_text));
        }

        jQuery(document).ready(function()
        {
            jQuery("#testing, #testing span").live('click', function()
            {
                updateSelectedText();
            });
        });

    </script>
</head>
<body>
    <div id="testing">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
        software like Aldus PageMaker including versions of Lorem Ipsum.
    </div>
</body>
</html>