

<ul id="actions">
    <li><a href="<?php echo base_url(); ?>todos/add/<?php echo $list->id; ?>">Add Todo</a></li>
    <li><a onclick="return confirm('Are you sure?')" href="<?php echo base_url(); ?>dashboard/delete/<?php echo $list->id; ?>">Delete List</a></li>
</ul>
<h4><?php echo $list->list_name; ?></h4>

<?php if($this->session->flashdata('task_deleted')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('task_deleted') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('task_created')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('task_created') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('task_updated')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('task_updated') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('marked_complete')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('marked_complete') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('marked_new')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('marked_new') . '</p>'; ?>
<?php endif; ?>
Created on:  <strong><?php echo date("n-j-Y",strtotime($list->create_date)); ?></strong>
<br /><br />
<br /><br />
<h4> Current Open Todos</h4>
<?php print_r($completed_todos);?>
<?php if($completed_todos) : ?>
    <ul>
        <?php foreach($completed_todos as $todo) : ?>
            <?php echo $todo->todo_name;?>
        <?php endforeach; ?>
    </ul>
<?php else : ?>
    <p>There are no current tasks</p>
<?php endif; ?>
<br />
<h4> Recently Completed</h4>
<?php if($uncompleted_todos) : ?>
    <ul>
        <?php foreach($uncompleted_todos as $todos) : ?>
        <li><a href="<?php echo base_url(); ?>todos/show/<?php echo $todos->todo_id; ?>"><?php echo $todos->todo_name; ?></li></a>
    <?php endforeach; ?>
    </ul>
<?php else : ?>
    <p>There are no completed tasks</p>
<?php endif; ?>
<hr />
<a href="<?php echo base_url(); ?>lists"><- Go Back to Lists</a>

<li><a href="<?php echo base_url(); ?>todos/show/<?php echo $todo->todo_id; ?>"><?php echo $todo->todo_name; ?></a></li>