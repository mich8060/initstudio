<h1>Admin</h1>
<?

$this->table->set_heading('id', 'type', 'url', 'template', 'model', 'parent', 'function', 'active', 'premissions');
foreach($results as $r) {
	$this->table->add_row($r->id, $r->type, $r->url, $r->template, $r->model, $r->parent, $r->function, $r->active, $r->premissions);
}
$this->table->set_empty("&nbsp;");
echo $this->table->generate();

?>