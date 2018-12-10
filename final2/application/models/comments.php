<?php
class Comments extends Model{

    function getComment($commentID){
        $sql = 'SELECT commentID, uID, commentText, date, postID FROM comments WHERE commentID = ?';
        $results = $this->db->getrow($sql, array($commentID));

        $comment = $results;

        return $comment;

    }

    public function getUserPosts($uID){

        $sql = 'select * from comments where uID = ?';

        $results = $this->db->execute($sql, $uID);

        while ($row=$results->fetchrow()) {
            $comments[] = $row;
        }

        return $comments;
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

      $sql='INSERT INTO comments (uID,commentText,date,postID) VALUES (1,?,?)';
      $this->db->execute($sql,$data);
      $message = 'Comments added.';
      return $message;
      }

     public function updateComment($data) {
      $sql = 'UPDATE comments SET uID = ?, commentText = ?, date = ?, postID = ? where commentID = ?';
      $this->db->execute($sql, $data);
      $message = "Comment updated.";
      return $message;
      }

     public function deleteComment($data) {

     $sql = 'DELETE comments WHERE commentID = ?';
     $this->db->execute($sql, $data);
     $message = "Post Deleted.";
     return $message;
          }


}
