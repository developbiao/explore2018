<?php
// 小米Note3 三星 S8 iPhone X
// 共同拥有的面部识别功能
trait Faceable {
  protected $face_id = 0;

  // 就当是获取面部识别
  public function getFace()
  {
    return $this->face_id;

  }

  // 就当我是设置面部信息功能
  public function setFace($face_id)
  {
    $this->face_id = $face_id;
  }


}
?>
