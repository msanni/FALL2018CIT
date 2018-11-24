<?php
class Comments extends Model{

	function getComments($commentID){
			$sql = 'SELECT commentID, uID, commentText, date, postID FROM comments WHERE $commentID = ?';
			$results = $this->db->getrow($sql, array($commentID));

			$comment = $results;

			return $comment;
	}


	public function getAllComments($limit = 0){

			if($limit > 0){

					$numcomments = ' LIMIT '.$limit;
			}

			$sql =  'SELECT commentID, uID, commentText, date, postID FROM comments'.$numcomments;

			// perform query
			$results = $this->db->execute($sql);

			while ($row=$results->fetchrow()) {
					$comments[] = $row;
			}

			return $comments;
	}


	public function addComment($data){

			$sql='INSERT INTO comments (uID, commentText, date, postID) VALUES (1,?,?,?)';
			$this->db->execute($sql,$data);
			$message = 'Comment added.';
			return $message;

	}

	public function deleteComment($data) {

			$sql = 'DELETE comments WHERE commentID = ?';
			$this->db->execute($sql, $data);
			$message = "Comment Deleted.";
			return $message;
	}

}
