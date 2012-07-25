<?php

	if(isset($_POST['removeMock']) && !empty($_POST['removeMock'])) {

		$linkID = intval($_POST['linkID']);

		$where = "id = " . $linkID;
		$result = $db->delete('media_unit_link', $where);

		echo json_encode(array('status' => 'success'));
}