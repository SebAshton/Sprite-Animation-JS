

/**
 * Sprite Animation JS
 *
 * https://github.com/SebAshton/Sprite-Animation-JS
 *
 * Copyright (c) 2012 Seb Ashton
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 */

var Animation;
Animation = (function() {
  function Animation(id, array, intervalRate) {
    var self;
    this.id = id;
    this.array = array;
    this.intervalRate = intervalRate;
    self = this;
    this.elem = document.getElementById(id);
    this.active = false;
    this.arrSize = this.array.length - 1;
    this.arrIt = 0;
    this.timer = null;
    this.animate = function() {
      self.setBackground(self.array[self.arrIt][0], self.array[self.arrIt][1]);
      return self.iterate();
    };
  }
  Animation.prototype.start = function() {
    if (this.timer || this.active) {
      return false;
    }
    this.active = true;
    this.timer = setInterval(this.animate, parseInt(this.intervalRate));
    return true;
  };
  Animation.prototype.stop = function() {
    clearInterval(this.timer);
    this.timer = null;
    return this.active = false;
  };
  Animation.prototype.setBackground = function(x, y) {
    return this.elem.style.backgroundPosition = '' + x.toString() + 'px ' + y.toString() + 'px';
  };
  Animation.prototype.iterate = function() {
    var newIt;
    if (this.arrIt === this.arrSize) {
      return this.setIterate(parseInt(0));
    } else {
      newIt = parseInt(this.arrIt) + 1;
      return this.setIterate(newIt);
    }
  };
  Animation.prototype.setIterate = function(num) {
    return this.arrIt = num;
  };
  return Animation;
})();