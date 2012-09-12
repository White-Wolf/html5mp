<?php function render() {
	foreach($this as $key => $value)
	{
		if($key != "_useViewStream" && $key != "_useStreamWrapper")
		{
			$$key = $value;
		}
	}
}?>
<div class='playerContainer'>
	<audio id='player'>
		<source />
		<script>player.notSupported()</script>
	</audio>
	
	<div class='playerDisplay'>
		<span class='playerDisplay-NowPlaying'>Now Playing</span>
		<div id='playerDisplay-Title'></div>
		<div id='playerDisplay-Album'></div>
		<div id='playerDisplay-Artist'></div>
	</div>
	
	<div class='playerControls'>
		<ul class='playerControls-Primary'>
			<li id='playerControl-Prev'></li>
			<li id='playerControl-PlayPause'></li>
			<li id='playerControl-Stop'></li>
			<li id='playerControl-Next'></li>
		</ul>
		
		<ul class='playerControls-Secondary'>
			<li id='playerControl-Shuffle'></li>
			<li id='playerControl-Randon'></li>
		</ul>
	</div>
	
	<div id='playerPlaylist'>
		<div class='playerPlaylistControls'>
			<ul class='playerPlaylistControls'>
				<li id='playerPlaylistControl-Clear'></li>
			</ul>
		</div>
		<ul id='playerPlaylist-List'>
			<li id='playerPlaylist-ListItem#'></li>
		</ul>
	</div>
</div>
<?php }?>