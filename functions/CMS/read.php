<?php

function home($conn)
{
	$content = $conn->prepare("SELECT * FROM content");
    $content->execute();
    $result = $content->fetchAll();
    $return = "<table>";
    foreach ($result as $key => $value) 
    {
    	$id = $value["content_id"];
    	$content = $value["content"];
    	$index = $key+1;
    	$return .= "<tr><td>$index</td><td>$id</td><td>$content</td></tr>";
    }
    $return .= "</tr>";
	return $return;
}

function insertHome($conn, $content_id, $newText, $newContent)
{
	$stmt = $conn->prepare("INSERT INTO content (content_id, content, language) VALUES (:content_id, :content, :language)");
    $stmt->bindParam(':content', $newContent);
	$stmt->bindParam(':language', $newText);
	$stmt->bindParam(':content_id', $content_id);
	$stmt->execute();
}