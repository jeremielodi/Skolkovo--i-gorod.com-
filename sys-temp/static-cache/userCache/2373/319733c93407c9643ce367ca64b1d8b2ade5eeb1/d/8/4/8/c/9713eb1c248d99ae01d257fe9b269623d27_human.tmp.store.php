<?php
	$headers = unserialize(base64_decode('YTo0OntpOjA7czoyMzoiWC1Qb3dlcmVkLUJ5OiBQSFAvNS4yLjYiO2k6MTtzOjM4OiJFeHBpcmVzOiBUaHUsIDE5IE5vdiAxOTgxIDA4OjUyOjAwIEdNVCI7aToyO3M6Nzc6IkNhY2hlLUNvbnRyb2w6IG5vLXN0b3JlLCBuby1jYWNoZSwgbXVzdC1yZXZhbGlkYXRlLCBwb3N0LWNoZWNrPTAsIHByZS1jaGVjaz0wIjtpOjM7czoxNjoiUHJhZ21hOiBuby1jYWNoZSI7fQ=='));
	$session = unserialize(base64_decode('YToxOTp7czo3OiJ1c2VyX2lkIjtzOjQ6IjIzNzMiO3M6ODoiaXNfYWRtaW4iO2E6MTp7aToyMzczO2I6MDt9czoxOToib2xkX2xvZ2dlZF9pbl92YWx1ZSI7YjowO3M6NDoic3RhdCI7YTo4OntzOjExOiJpc1NlYXJjaEJvdCI7YjowO3M6MjoiaWQiO3M6MzI6ImM5NzRiNjhkZjkyNDEzYzQzNDA1MDYyZjBlN2U3MmNiIjtzOjc6InNpdGVfaWQiO3M6MToiMSI7czo3OiJ1c2VyX2lkIjtpOjM2MjU7czo3OiJwYXRoX2lkIjtpOjQxMzM7czoxNDoibnVtYmVyX2luX3BhdGgiO2k6MTI7czoxMjoibGFzdF9wYWdlX2lkIjtzOjE6IjUiO3M6MTI6InByZXZfcGFnZV9pZCI7czoxOiI1Ijt9czozMjoiZjU2MmY3NzMzNjdkMDBiZWZkMWRkNWZhNWI1NTQ3MjMiO2E6Mzp7aTowO2E6Mzp7aTowO3M6NzoiY29udGVudCI7aToxO3M6MDoiIjtpOjI7czoxOiIxIjt9aToxO2E6Mzp7aTowO3M6NzoiY29udGVudCI7aToxO3M6MDoiIjtpOjI7czoyOiIxNiI7fWk6MjthOjM6e2k6MDtzOjc6ImNvbnRlbnQiO2k6MTtzOjA6IiI7aToyO3M6MjoiMjMiO319czoyNDoic2Vzc2lvbi1jcm9zc2RvbWFpbi1zeW5jIjtpOjE7czoxMToidW1pX2NhcHRjaGEiO3M6MzI6ImUxYzBjOTA2MTI3OWI2MWM4YTZhYjBmYzFmOTlhZWY3IjtzOjE3OiJ1bWlfY2FwdGNoYV9wbGFpbiI7czo2OiJmZ2gyYzgiO3M6MTI6InVzZXJfY2FwdGNoYSI7czozMjoiY2ZjZDIwODQ5NWQ1NjVlZjY2ZTdkZmY5Zjk4NzY0ZGEiO3M6ODoiaXNfaHVtYW4iO2k6MTtzOjMyOiJhZTg4NjhhNzhmOGUxMzJkMDdhMjI4NTM1OTcwMDM3ZCI7YToyOntpOjA7YTozOntpOjA7czo3OiJjb250ZW50IjtpOjE7czowOiIiO2k6MjtzOjI6IjE2Ijt9aToxO2E6Mzp7aTowO3M6NzoiY29udGVudCI7aToxO3M6MDoiIjtpOjI7czoyOiIyMyI7fX1zOjMyOiJmNTI4NDdiZDgwNzZmMWI5NDU0YThkZWIzMDdhMmQzYSI7YTozOntpOjA7YTozOntpOjA7czo0OiJuZXdzIjtpOjE7czo0OiJpdGVtIjtpOjI7aToxNDQ7fWk6MTthOjM6e2k6MDtzOjc6ImNvbnRlbnQiO2k6MTtzOjA6IiI7aToyO3M6MjoiMTYiO31pOjI7YTozOntpOjA7czo3OiJjb250ZW50IjtpOjE7czowOiIiO2k6MjtzOjI6IjIzIjt9fXM6MzI6ImY1ZWE4MDBmN2ExMzE3M2I4YTY5OGFkNGQxNjA5ZDdiIjthOjM6e2k6MDthOjM6e2k6MDtzOjc6ImNvbnRlbnQiO2k6MTtzOjA6IiI7aToyO3M6MToiNCI7fWk6MTthOjM6e2k6MDtzOjc6ImNvbnRlbnQiO2k6MTtzOjA6IiI7aToyO3M6MjoiMTYiO31pOjI7YTozOntpOjA7czo3OiJjb250ZW50IjtpOjE7czowOiIiO2k6MjtzOjI6IjIzIjt9fXM6MzI6IjIxNDM4MjhiODljNTJhMDk0ZDhkYjg2YTQwOGVlZmNjIjthOjM6e2k6MDthOjM6e2k6MDtzOjc6ImNvbnRlbnQiO2k6MTtzOjA6IiI7aToyO3M6MToiNyI7fWk6MTthOjM6e2k6MDtzOjc6ImNvbnRlbnQiO2k6MTtzOjA6IiI7aToyO3M6MjoiMTYiO31pOjI7YTozOntpOjA7czo3OiJjb250ZW50IjtpOjE7czowOiIiO2k6MjtzOjI6IjIzIjt9fXM6MzI6IjYzYTU5ODNlZGI2NmQzODBmZmZjMDY0MzU2MzBiNTQ5IjthOjM6e2k6MDthOjM6e2k6MDtzOjc6ImNvbnRlbnQiO2k6MTtzOjA6IiI7aToyO3M6MzoiMTI5Ijt9aToxO2E6Mzp7aTowO3M6NzoiY29udGVudCI7aToxO3M6MDoiIjtpOjI7czoyOiIxNiI7fWk6MjthOjM6e2k6MDtzOjc6ImNvbnRlbnQiO2k6MTtzOjA6IiI7aToyO3M6MjoiMjMiO319czozMjoiYTIyODBiYjlkZjlkYTIzNzBhZjZjYTgzNWE2NTYzZjciO2E6Mzp7aTowO2E6Mzp7aTowO3M6NzoiY29udGVudCI7aToxO3M6MDoiIjtpOjI7czozOiIxMzkiO31pOjE7YTozOntpOjA7czo3OiJjb250ZW50IjtpOjE7czowOiIiO2k6MjtzOjI6IjE2Ijt9aToyO2E6Mzp7aTowO3M6NzoiY29udGVudCI7aToxO3M6MDoiIjtpOjI7czoyOiIyMyI7fX1zOjMyOiI0YjRlNWRhYjNmYzNhNzQwNjA2YWZmZDU2N2QzMGYwZiI7YTozOntpOjA7YTozOntpOjA7czo3OiJjb250ZW50IjtpOjE7czowOiIiO2k6MjtzOjM6IjE0NSI7fWk6MTthOjM6e2k6MDtzOjc6ImNvbnRlbnQiO2k6MTtzOjA6IiI7aToyO3M6MjoiMTYiO31pOjI7YTozOntpOjA7czo3OiJjb250ZW50IjtpOjE7czowOiIiO2k6MjtzOjI6IjIzIjt9fXM6MzI6IjYyNjQxM2RhZDc4MmU3M2FiNjllYmViN2I3ZjUzZjBjIjthOjM6e2k6MDthOjM6e2k6MDtzOjc6ImNvbnRlbnQiO2k6MTtzOjA6IiI7aToyO3M6MzoiMTM1Ijt9aToxO2E6Mzp7aTowO3M6NzoiY29udGVudCI7aToxO3M6MDoiIjtpOjI7czoyOiIxNiI7fWk6MjthOjM6e2k6MDtzOjc6ImNvbnRlbnQiO2k6MTtzOjA6IiI7aToyO3M6MjoiMjMiO319czozMjoiNzA0NmEzNTM2NzMxM2QwYjFkZjZkYzY0MDE0ZjUzMDMiO2E6Mzp7aTowO2E6Mzp7aTowO3M6NzoiY29udGVudCI7aToxO3M6MDoiIjtpOjI7czozOiIxMjciO31pOjE7YTozOntpOjA7czo3OiJjb250ZW50IjtpOjE7czowOiIiO2k6MjtzOjI6IjE2Ijt9aToyO2E6Mzp7aTowO3M6NzoiY29udGVudCI7aToxO3M6MDoiIjtpOjI7czoyOiIyMyI7fX19'));
	
	if(is_array($headers)) {
		$cmp = strtolower("Set-Cookie");
		
		for($i = 0; $i < sizeof($headers); $i++) {
			if(substr(strtolower($headers[$i]), 0, strlen($cmp)) == $cmp) {
				continue;
			} else {
				header($headers[$i]);
			}
		}
	}
	if (!session_id()) session_start();
	$_SESSION = $session;
?>