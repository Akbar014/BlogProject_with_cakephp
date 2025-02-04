<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Post</h1>
<?php echo $this->Html->link(
    'All Post',
    array('controller' => 'posts', 'action' => 'index')
); ?>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '2'));
echo $this->Form->end('Save Post');
?>