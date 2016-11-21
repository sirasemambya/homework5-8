<?php

  require_once 'Editor.php';
  class Nettuts {
    function publishNextArticle($editor) {
          var_dump($editor->getEditorName());
          $reflector = new ReflectionClass($editor);
          $editorName = $reflector->getProperty('name');
          $editorName->setAccessible(true);
          $editorName->setValue($editor, 'Mark Twain');
          var_dump($editorName->getValue($editor));
          var_dump(call_user_func(array($editor, 'getEditorName')));
      }
   
  }
?>