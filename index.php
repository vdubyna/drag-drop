<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/prototype.js" type="text/javascript"></script>

    <style>
        #testing::selection {
            background: #FFB7B7; /* Safari, Chrome, Opera */
        }

        #testing::selection span {
            color: blue;
        }

        #testing::-moz-selection {
            background: #FFB7B7; /* FireFox */
            color: green;
        }

        #testing::-moz-selection span {
            color: blue;
        }

        #testing {
            width: 300px;
            margin: 100px;
        }

        span {
            background: none repeat scroll 0 0 #CCCCCC;
            border-radius: 3px 3px 3px 3px;
            box-shadow: 0 0 5px #7f7f7f;
            font-size: 16px;
        }
    </style>

    <script>
        function getSelText(){
        	var txt = '';
        	if (window.getSelection){
        		txt = window.getSelection();
        	}else if (document.getSelection){
        		txt = document.getSelection();
        	}else if (document.selection){
        		txt = document.selection.createRange().text;
        	}

            return txt;
        }

        function setNewText()
        {
            var old_text = jQuery("#testing").html();
            var new_text = '<span>' + getSelText() + '</span>';
            var temp = old_text.replace(getSelText(), new_text);
            jQuery("#testing").html(temp);
        }

        jQuery(document).ready(function()
        {
            jQuery("#testing, #testing span").live('click', function()
            {
                setNewText();
            });
        });

    </script>
</head>
<body>
    <div id="testing">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
    <div id="new_text"></div>
    <button onclick="setNewText();">submit</button>
</body>
zxcxzczxczx
</html>