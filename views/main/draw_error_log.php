<? if (!empty($errors)): ?>
  <table class="table table-striped table-bordered table-condensed">
  	<thead>
  	  <th>Error</th>
  	  <? if ($hide != 'job'): ?>
  			<th>Job</th>
  		<? endif ?>
  	  <? if ($hide != 'bot'): ?>
  		  <th>Bot</th>
  	  <? endif ?>
  		<? if ($hide != 'queue'): ?>
  			<th>Queue</th>
  		<? endif ?>
  		<? /* if ($hide != 'user'): ?>
  			<th>User</th>
  		<? endif */ ?>
  		<th>Date</th>
  	</thead>
  	<tbody>
    <? foreach ($errors AS $row): ?>
      <? $log = $row['ErrorLog'] ?>
      <tr>
    	  <td><span class="text-error"><?=Utility::sanitize($log->get('reason'))?></span></td>
    	  <? if ($hide != 'job'): ?>
    			<td><?=$log->getJob()->getLink()?></td>
    		<? endif ?>
    	  <? if ($hide != 'bot'): ?>
    		  <td><?=$log->getBot()->getLink()?></td>
    	  <? endif ?>
    		<? if ($hide != 'queue'): ?>
    			<td><?=$log->getQueue()->getLink()?></td>
    		<? endif ?>
    		<? /*if ($hide != 'user'): ?>
    			<td><?=$log->getUser()->getLink()?></td>
    		<? endif*/ ?>
    		<td><?=Utility::formatDateTime($log->get('error_date'))?></td>        
      </tr>
    <? endforeach ?>
  </table>
<? else: ?>
  <div class="alert alert-success ">
    Yay!  No errors!!
  </div>
<? endif ?>