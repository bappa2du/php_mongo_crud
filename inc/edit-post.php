<?php
include 'db.class.php';
if(isset($_POST['update_post'])){
    $id = $_POST['post_id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $collection = 'posts';
    
    if(!empty($title) && !empty($content)){
   
//    $mongo =  DB::instantiate();
//    $post_collection = $mongo->get_collection('posts');
    $post = array( 
                'title' => $title,
                'content' => $content,               
            );
//    $post_id = $post_collection->update(array('_id' =>$id), $post, array('safe'=>TRUE));
    $result = DB::connect()->updateDocument($collection,$id,$post);
    header('Location:../dashboard.php');
    }
}
?>