<?php
class __json_data {public function json_move_field_after() {$v3aabf39f2d943fa886d86dcbbee4d910 = getRequest('param0');$vdad657587aa8d2135873a994bcf4ba3f = getRequest('param1');$v3f84b203eef48e9862ac1ffbe344dffe = getRequest('param2');$v94757cae63fd3e398c0811a976dd6bbe = getRequest('param3');$vfcd4b86e12c95a57c24239e8a4125360 = false;if($v3f84b203eef48e9862ac1ffbe344dffe != "false") {$v5f2444d49c5d43b9cf7a3d7174b983f1 = $v3f84b203eef48e9862ac1ffbe344dffe;}else {$vac5c74b64b4b8352ef2f181affb5ac2a = <<<SQL
SELECT fc.group_id FROM cms3_object_field_groups ofg, cms3_fields_controller fc WHERE ofg.type_id = '{$v94757cae63fd3e398c0811a976dd6bbe}' AND fc.group_id = ofg.id AND fc.field_id = '$vdad657587aa8d2135873a994bcf4ba3f'
SQL;
SELECT fc.group_id FROM cms3_object_field_groups ofg, cms3_fields_controller fc WHERE ofg.type_id = '{$v94757cae63fd3e398c0811a976dd6bbe}' AND fc.group_id = ofg.id AND fc.field_id = '$v3aabf39f2d943fa886d86dcbbee4d910'
SQL;