scoreMe = ->
  correct = 1
  key = [null, 1, 2, 2, 1, 1, 0, 1, 1, 1, 3, null]
  level = [
    "ZERO points? Is that even possible?",
    "One point. You can do better hitting answers at random.",
    "Two points. Hmm, not very good. Next time don't cheat off your neighbor.",
    "Three points. Ok, could be better. Call us and catch up soon.",
    "Four points. Hmm, that's fairly low. Wanna be in our circles on Google+?",
    "Five points. That's about average, but who wants to be average? Let's be Facebook friends.",
    "Six points. Well, you've beaten the curve.",
    "Seven points. That's a pretty good score, and seven <em>is</em> one of our favorite numbers.",
    "Eight points. That's great. You should be proud.",
    "Nine points. You know us so well. :-)",
    "Ten points. Perfect score, that's wonderful!"
  ]
  while count <= 10
    
    # Count the number of correct answers
    # Bold the correct answers and strikeout the wrong ones
    $checked = $("input[name=q" + count + "]:checked")
    if $checked.index("input[name=q" + count + "]") is key[count]
      correct++
    else
      $checked.parent().addClass "wrong"
    $("input[name=q" + count + "]:eq(" + key[count] + ")").parent().addClass "correct"
    count++
  
  # Don't display a message if the answers are all correct
  $("#not_perfect").hide()  if correct is 10
  
  # Load a number image and detect the image height
  img = new Image()
  img.onload = ->
    $("#number").css "background-image", "url(" + img.src + ")"

  rand = Math.floor(Math.random() * 4)
  img.src = "images/number-" + correct + "-" + rand + ".png"
  
  # Populate the proper values to the level they've reached
  $("#score #answer").html correct
  $("#level").html level[correct]
  
  # Disable all the radio buttons because we have a score
  $("input[type=radio]").prop "disabled", "disabled"
  $("li").unbind "click"
  correct
scored = false

# Set Variables
page = 0
$("form").change ->
  count = 1
  while count <= 10
    $("#q" + count + " button.next").removeProp "disabled"  if $("input[name=q" + count + "]:checked").size() is 1
    count++

$("button.next").click ->
  scoreMe()  if 10 is page
  if 0 is page
    
    # Reset quiz
    scored = false
    $("input").removeProp("checked").removeProp "disabled"
    $("li:has('input')").removeClass("correct").removeClass "wrong"
    $("li:has('input[type=radio]')").click ->
      $(this).children("input[type=radio]").prop "checked", "checked"
      $("#q" + page + " button.next").removeProp "disabled"

  return true  if scored is true
  if 10 > page
    nextQuestion = page + 1
    $("#q" + nextQuestion + " button.next").prop "disabled", "disabled"  if $("input[name=q" + nextQuestion + "]:checked").size() is 0
  $("#content .page:eq(" + page + ")").animate
    opacity: 0.1
  , 300, ->
    $("#content .page:eq(" + page + ")").hide()
    page++
    $("#content .page:eq(" + page + ")").css("opacity", 0.1).show().animate
      opacity: 1
    , 300

  false

$("button.prev").click ->
  $("#content .page:eq(" + page + ")").animate
    opacity: 0.1
  , 300, ->
    $("#content .page:eq(" + page + ")").hide()
    page--
    $("#content .page:eq(" + page + ")").css("opacity", 0.1).show().animate
      opacity: 1
    , 300

  false

# Show the first page and enable the button
$("#content .page:eq(0)").show()
$("#q0 button.next").removeProp "disabled"
