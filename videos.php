<?php
	if(isset($_GET['t']))
	{
		$topic = trim($_GET['t']);
	}else{
		$topic = "i";
	}
	if(isset($_GET['n']))
	{
		$number = intval(trim($_GET['n']));
	}else{
		$number = 0;
	}
	$introduction = array(
												array("title" => "Introduction to Data Structures.", "link" => "https://www.youtube.com/embed/92S4zgXN17o")
											 );
	$stack = array(
									array("title" => "Data Structures: Introduction to Stack.", "link" => "https://www.youtube.com/embed/F1F2imiOJfk"),
									array("title" => "Data Structures: Arrays and implementation of stack.", "link" => "https://www.youtube.com/embed/sFVxsglODoo"),
									array("title" => "Data Structures: Linked List implementation of stacks.", "link" => "https://www.youtube.com/embed/MuwxQ2IB8lQ"),
									array("title" => "Reverse a string or Linked List using stack.", "link" => "https://www.youtube.com/embed/hNP72JdOIgY"),
									array("title" => "Check for balanced parentheses using stack.", "link" => "https://www.youtube.com/embed/QZOLb0xHB_Q"),
									array("title" => "Infinix, Prefix and Postfix.", "link" => "https://www.youtube.com/embed/jos1Flt21is"),
									array("title" => "Evaluation of Prefix and Postfix expressions using stack.", "link" => "https://www.youtube.com/embed/MeRb_1bddWg"),
									array("title" => "Infinix to postfix using stack.", "link" => "https://www.youtube.com/embed/vq-nUF0G4fI")
								);
	$linked_list = array(
												array("title" => "Data Structures: List as abstract data type.", "link" => "https://www.youtube.com/embed/HdFG8L1sajw"),
												array("title" => "Introduction to Linked Lists.", "link" => "https://www.youtube.com/embed/NobHlGUjV3g"),
												array("title" => "Data Structures: Arrays Vs Linked Lists.", "link" => "https://www.youtube.com/embed/lC-yYCOnN8Q"),
												array("title" => "Linked List Implementation in C/C++.", "link" => "https://www.youtube.com/embed/vcQIFT79_50"),
												array("title" => "Linked List in C/C++ - Inserting a node at beginning.", "link" => "https://www.youtube.com/embed/cAZ8CyDY56s"),
												array("title" => "Linked List in C/C++ - Inserting note at nth position.", "link" => "https://www.youtube.com/embed/IbvsNF22Ud0"),
												array("title" => "Linked List in C/C++ - Delete a node at nth position.", "link" => "https://www.youtube.com/embed/Y0n86K43GO4"),
												array("title" => "Reverse a Linked List - Iterative Method.", "link" => "https://www.youtube.com/embed/sYcOK51hl-A"),
												array("title" => "Print elements of a Linked List in forward and reverse order.", "link" => "https://www.youtube.com/embed/K7J3nCeRC80"),
												array("title" => "Reverse a Linked List using recursion.", "link" => "https://www.youtube.com/embed/KYH83T4q6Vs"),
												array("title" => "Data Structures: Introduction to Doubly Linked Lists.", "link" => "https://www.youtube.com/embed/JdQeNxWCguQ"),
												array("title" => "Doubly Linked List Implementation in C/C++.", "link" => "https://www.youtube.com/embed/VOQNf1VxU3Q")
											);
	$graphs = array(
									array("title" => "Data Structures: Introduction to graphs.", "link" => "https://www.youtube.com/embed/gXgEDyodOJU"),
									array("title" => "Data Structures: Properties of graphs.", "link" => "https://www.youtube.com/embed/AfYqN3fGapc"),
									array("title" => "Graph Representation part 01 - Edge List.", "link" => "https://www.youtube.com/embed/ZdY1Fp9dKzs"),
									array("title" => "Graph Representation part 02 - Adjacency Matrix.", "link" => "https://www.youtube.com/embed/9C2cpQZVRBA"),
									array("title" => "Graph Representation part 03 - Adjancency List.", "link" => "https://www.youtube.com/embed/k1wraWzqtvQ")
								 );
	$trees = array(
									array("title" => "Data Structures: Introduction to Trees.", "link" => "https://www.youtube.com/embed/qH6yxkw0u78"),
									array("title" => "Data Structures: Binary Tree.", "link" => "https://www.youtube.com/embed/H5JubkIy_p8"),
									array("title" => "Data Structures: Binary Search Tree.", "link" => "https://www.youtube.com/embed/pYT9F8_LFTM"),
									array("title" => "Binary Search Tree implementation in C/C++.", "link" => "https://www.youtube.com/embed/COZK7NATh4k"),
									array("title" => "BST Implementation - memory allocation in stack.", "link" => "https://www.youtube.com/embed/hWokyBoo0aI"),
									array("title" => "Find min and max element in a binary search tree.", "link" => "https://www.youtube.com/embed/Ut90klNN264"),
									array("title" => "Find height of a binary tree.", "link" => "https://www.youtube.com/embed/_pnqMz5nrRs"),
									array("title" => "Binary tree traversal - breadth-first and depth-first search.", "link" => "https://www.youtube.com/embed/9RHO6jU--GU"),
									array("title" => "Binary Tree: Level Order Traversal.", "link" => "https://www.youtube.com/embed/86g8jAQug04"),
									array("title" => "Binary Tree Traversal: Preorder, Inorder, Postorder.", "link" => "https://www.youtube.com/embed/gm8DUJJhmY4"),
									array("title" => "Check if a binary tree is binary search tree or not.", "link" => "https://www.youtube.com/embed/yEwSGhSsT0U"),
									array("title" => "Delete a node from Binary Search Tree.", "link" => "https://www.youtube.com/embed/gcULXE7ViZw"),
									array("title" => "Inorder Successor in a binary search tree.", "link" => "https://www.youtube.com/embed/5cPbNCrdotA")
								);
	$queues = array(
									array("title" => "Data Structures: Introduction to Queues.", "link" => "https://www.youtube.com/embed/XuCbpw6Bj1U"),
									array("title" => "Data Structures: Array implementation of Queue.", "link" => "https://www.youtube.com/embed/okr-XE8yTO8"),
									array("title" => "Data Structures: Linked List implementation of Queue.", "link" => "https://www.youtube.com/embed/A5_XdiK4J8A")
								 );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>Videos</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" media="screen and (min-width:1024px)" href="css/style_1024.css" />
<link rel="stylesheet" type="text/css" media="all and (max-width:1023px)" href="css/style_all.css" />
<style type="text/css">
	@font-face{
		font-family: "IcoFont";
		src: url("./fonts/icofont.ttf");
	}
	#mainright h1{
		margin-top: 10px;
		margin-bottom: 10px;
		text-align: center;
		line-height: 35px;
	}
	#home:before{
		float: right;
		font-size: 22pt;
		font-family: "IcoFont";
		content: "\ef47";
	}
	#hamburger:before{
		float: left;
		font-size: 22pt;
		font-family: "IcoFont";
		content: "\efa2";
	}
</style>
</head>
<body>
<div id="centrecontainer">
  <div id="outercontainer">
    <div id="container">
      <div id="headercont">
      	<ul style="padding: 15px; padding-bottom: 25px;">
      		<li><a id="hamburger"></a></li>
          <li><a id="home" href="home.php"></a></li>
        </ul>
      </div>
      <div id="maincont">
        <div id="mainleft">
        	<?php
        		$topic_text = "Introduction";
        		switch ($topic) {
        			case 's':
        				if($number < 0)
        					$number = 0;
        				if($number >= count($stack))
        					$number = count($stack) - 1;
        				$topic_text = "Stack";
        				break;
        			case 't':
        			  if($number < 0)
        					$number = 0;
        				if($number >= count($trees))
        					$number = count($trees) - 1;
        				$topic_text = "Trees";
        				break;
        			case 'q':
        				if($number < 0)
        					$number = 0;
        				if($number >= count($queues))
        					$number = count($queues) - 1;
        				$topic_text = "Queues";
        				break;
        			case 'l':
        				if($number < 0)
        					$number = 0;
        				if($number >= count($linked_list))
        					$number = count($linked_list) - 1;
        				$topic_text = "Linked Lists";
        				break;
        			case 'g':
        				if($number < 0)
        					$number = 0;
        				if($number >= count($graphs))
        					$number = count($graphs) - 1;
        				$topic_text = "Graphs";
        				break;
        			default:
        			  if($number < 0)
        					$number = 0;
        				if($number >= count($introduction))
        					$number = count($introduction) - 1;
        				$topic_text = "Introduction";
        				break;
        		}
        		echo "
          <h1>Data Structures and Algorithms: <span>".$topic_text."</span>, Video Tutorials.</h1>
          <ul>
          	<li><a href=\"videos.php?t=".$topic."&n=".($number-1)."\">Previous Video</a></li>
          	<li><a href=\"videos.php?t=".$topic."&n=".($number+1)."\">Next Video</a></li>
          </ul>";
        	?>
        </div>
        <div id="mainright">
        	<?php
        		switch($topic)
        		{
        			case 's':
        			{
        				echo "<h1>".($number+1).". ".$stack[$number]['title']."</h1>
											<iframe allowfullscreen=\"allowfullscreen\" mozallowfullscreen=\"mozallowfullscreen\" msallowfullscreen=\"msallowfullscreen\" oallowfullscreen=\"oallowfullscreen\" webkitallowfullscreen=\"webkitallowfullscreen\" width=\"100%\" src=\"".$stack[$number]['link']."\"> </iframe>";
        			}
        			break;
        			case 'l':
        			{
        				echo "<h1>".($number+1).". ".$linked_list[$number]['title']."</h1>
											<iframe allowfullscreen=\"allowfullscreen\" mozallowfullscreen=\"mozallowfullscreen\" msallowfullscreen=\"msallowfullscreen\" oallowfullscreen=\"oallowfullscreen\" webkitallowfullscreen=\"webkitallowfullscreen\" width=\"100%\" src=\"".$linked_list[$number]['link']."\"> </iframe>";
        			}
        			break;
        			case 'q':
        			{
        				echo "<h1>".($number+1).". ".$queues[$number]['title']."</h1>
											<iframe allowfullscreen=\"allowfullscreen\" mozallowfullscreen=\"mozallowfullscreen\" msallowfullscreen=\"msallowfullscreen\" oallowfullscreen=\"oallowfullscreen\" webkitallowfullscreen=\"webkitallowfullscreen\" width=\"100%\" src=\"".$queues[$number]['link']."\"> </iframe>";
        			}
        			break;
        			case 't':
        			{
        				echo "<h1>".($number+1).". ".$trees[$number]['title']."</h1>
											<iframe allowfullscreen=\"allowfullscreen\" mozallowfullscreen=\"mozallowfullscreen\" msallowfullscreen=\"msallowfullscreen\" oallowfullscreen=\"oallowfullscreen\" webkitallowfullscreen=\"webkitallowfullscreen\" width=\"100%\" src=\"".$trees[$number]['link']."\"> </iframe>";
        			}
        			break;
        			case 'g':
        			{
        				echo "<h1>".($number+1).". ".$graphs[$number]['title']."</h1>
											<iframe allowfullscreen=\"allowfullscreen\" mozallowfullscreen=\"mozallowfullscreen\" msallowfullscreen=\"msallowfullscreen\" oallowfullscreen=\"oallowfullscreen\" webkitallowfullscreen=\"webkitallowfullscreen\" width=\"100%\" src=\"".$graphs[$number]['link']."\"> </iframe>";
        			}
        			break;
        			default:
        			{
        				echo "<h1>".($number+1).". ".$introduction[$number]['title']."</h1>
											<iframe allowfullscreen=\"allowfullscreen\" mozallowfullscreen=\"mozallowfullscreen\" msallowfullscreen=\"msallowfullscreen\" oallowfullscreen=\"oallowfullscreen\" webkitallowfullscreen=\"webkitallowfullscreen\" width=\"100%\" src=\"".$introduction[$number]['link']."\"> </iframe>";
        			}
        			break;
        		}
        	?>
        </div>
      </div>
      <div id="menucont">
        <ul>
          <li><a class="active" href="videos.php?t=i">Introduction</a></li>
          <li><a class="active" href="videos.php?t=l">Linked Lists</a></li>
          <li><a class="active" href="videos.php?t=s">Stack</a></li>
          <li><a class="active" href="videos.php?t=q">Queues</a></li>
          <li><a class="active" href="videos.php?t=t">Trees</a></li>
          <li><a class="active" href="videos.php?t=g">Graphs</a></li>
        </ul>
      </div>
      <div id="footercont">
      	<ul>
          <li>Group 10</li>
        </ul>
      </div>
    </div>
  </div>
</div>
</body>
</html>
