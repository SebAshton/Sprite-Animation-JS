class Animation
	constructor: (@id, @array, @intervalRate) ->	
		self = @
		@elem = document.getElementById(id);
		@active = false;
		@arrSize = (@array.length-1);
		@arrIt = 0;
		@timer = null;
		@animate = ->
			self.setBackground(self.array[self.arrIt][0],self.array[self.arrIt][1]);
			self.iterate();
	
	start: ->
		if @timer or @active
			return false
		@active = true
		@timer = setInterval @animate, parseInt(@intervalRate)
		return true;
	
	stop: ->
		clearInterval @timer
		@timer = null
		@active = false
	
	setBackground: (x, y) ->
		@elem.style.backgroundPosition = ''+x+' '+y+'';
		
	iterate: ->
		if @arrIt == @arrSize
			@setIterate(parseInt(0))
		else
			newIt = parseInt(@arrIt) + 1
			@setIterate(newIt);
			
	setIterate: (num) ->
		@arrIt = num
		
$(document).ready ->
	laptop = new Animation "icon-laptop", [['-640px','-96px'],['-640px','-133px'],['-640px','-173px'],['-640px','-49px']], 500
	about = new Animation "icon-about",	[['-459px','-98px'],['-459px','-49px']],300
	lab = new Animation "icon-lab", [['-554px','-83px'],['-554px','-35px']],200

	laptop.start();
	about.start();
	lab.start();
