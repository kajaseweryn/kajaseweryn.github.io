var forEach = function (array, callback, scope) {
  for (var i = 0; i < array.length; i++) {
    callback.call(scope, i, array[i]); // passes back stuff we need
  }
};

var $articles = document.querySelectorAll('.ArticleTeaser');

setTimeout( run, 500 );

// Do the dew
function run() {
  forEach($articles, function(index, value) {
    articleAnim(value, index);

    articleHover(value);
  });
}

// Individual teaser animation
function articleAnim(element, count) {
  var at = new TimelineMax();

  at
  .set(element, {
    visibility: 'visible'
  })
  .from(element.querySelector('.ArticleTeaser-bubble'), .5, {
    scale: 0,
    delay: (count * .75),
    ease: Elastic.easeOut.config(1.5, 1)
  })
  .from(element.querySelector('.ArticleTeaser-title'), .5, {
    x: '25%',
    opacity: 0,
    ease: Elastic.easeOut.config(1.5, 1)
  }, 'article-teaser')
  .from(element.querySelector('.ArticleTeaser-date'), .5, {
    x: '-25%',
    opacity: 0,
    ease: Elastic.easeOut.config(1.5, 1)
  }, 'article-teaser');
}

// Hover animation
function articleHover(element) {
  var $articleLink = element.querySelector('.ArticleTeaser-title a');
  element.timeline = new TimelineMax({ paused: true });

  element.timeline
  .to(element.querySelector('.ArticleTeaser-bubble'), 0.15, {
    scale: 1.25
  });

  $articleLink.addEventListener('mouseenter', function() {
    element.timeline.play();
  });

  $articleLink.addEventListener('mouseleave', function() {
    element.timeline.reverse();
  });
}
