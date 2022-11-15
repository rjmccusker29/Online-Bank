<table><tr><td> <em>Assignment: </em> HW HTML5 Canvas Game</td></tr>
<tr><td> <em>Student: </em> Ryan McCusker(rjm8)</td></tr>
<tr><td> <em>Generated: </em> 3/27/2022 6:24:46 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/hw-html5-canvas-game/grade/rjm8" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Create a branch for this assignment called <em>M6-HTML5-Canvas</em></li>
<li>Pick a base HTML5 game from <a href="https://bencentra.com/2017-07-11-basic-html5-canvas-games.html">https://bencentra.com/2017-07-11-basic-html5-canvas-games.html</a></li>
<li>Create a folder inside public_html called  <em>M6</em></li>
<li>Create an html5.html file in your M6 folder (do not put it in Project even if you&#39;re doing arcade)</li>
<li>Copy one of the base games (from the above link)</li>
<li>Add/Commit the baseline of the game you&#39;ll mod for this assignment <em>(Do this before you start any mods/changes)</em></li>
<li>Make two significant changes<ol>
<li>Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once.</li>
<li>Direct copies of my class example changes will not be accepted (i.e., just having an AI player for pong, rotating canvas, or multi-ball unless you make a significant tweak to it)</li>
<li>Significant changes are things that change with game logic or modify how the game works. Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once). You may however change such values through game logic during runtime. (i.e., when points are scored, boundaries are hit, some action occurs, etc)</li>
</ol>
</li>
<li>Evidence/Screenshots<ol>
<li>As best as you can, gather evidence for your first significant change and fill in the deliverable items below.</li>
<li>As best as you can, gather evidence for your significant change and fill in the deliverable items below.</li>
<li>Remember to include your ucid/date as comments in any screenshots that have code</li>
<li>Ensure your screenshots load and are visible from the md file in step 9</li>
</ol>
</li>
<li>In the M6 folder create a new file called m6_submission.md</li>
<li>Save your below responses, generate the markdown, and paste the output to this file</li>
<li>Add/commit/push all related files as necessary</li>
<li>Merge your pull request once you&#39;re satisfied with the .md file and the canvas game mods</li>
<li>Create a new pull request from dev to prod and merge it</li>
<li>Locally checkout dev and pull the merged changes from step 12</li>
</ol>
<p>Each missed or failed to follow instruction is eligible for -0.25 from the final grade</p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Game Info </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game did you pick to edit/modify?</td></tr>
<tr><td> <em>Response:</em> <p>Pong<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the direct link to the html5.html file from Heroku Prod (i.e., https://mt85-prod.herokuapp.com/M6/html5.html)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rjm8-prod.herokuapp.com/M6/pong.html">https://rjm8-prod.herokuapp.com/M6/pong.html</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the pull request link for this assignment from M6-HTML5-Canvas to dev</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/31">https://github.com/rjm8/IT202-008/pull/31</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Significant Change #1 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>The left paddle will continue to move in the direction of the most<br>recently pressed key. If the user presses &#39;W&#39;, it will keep moving up<br>until it reaches the top or until the user presses &#39;S&#39;, and vis<br>versa.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://github.com/rjm8/IT202-008/pull/31"/></td></tr>
<tr><td> <em>Caption:</em> <p>The left paddle went all the way to the top because the last<br>key pressed was &#39;W&#39;.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/160303023-10d874db-dd2e-47ee-8b4e-6392e0bc8419.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I created to new variables: upMomentum and downMomentum. When an &quot;up&quot; key is<br>pressed, upMomentum is set to true and downMomentum is set to false, and<br>vis versa. I commented out the &quot;keyup&quot; eventListener because key ups don&#39;t matter<br>in my version.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/160303139-688564dd-e4be-4427-b1f4-bcf3ff8b12bb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I commented out the previous code for movePaddle, because my version is only<br>dependent on paddle momentum. If there is upMomentum, the paddle moves up, if<br>there is downMomentum, the paddle moves down.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Significant Change #2 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>The ball grows bigger each time it hits a paddle and resets when<br>a point is scored.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/160303224-4161c8c5-d669-4119-870b-86276281a3ce.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The ball has grown bigger during the rally<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/160303262-9da61cff-afbc-456a-9878-d6c33b6768db.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>When the ball collides with either paddle, ball height and width are increased<br>by 2.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/160303325-ebfbb9a0-d443-45c8-a589-064be524f9a5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>When the ball is reset (after a score), the ball width and height<br>are reset to 10.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Discuss </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Talk about what you learned during this assignment and the related HTML5 Canvas readings (at least a few sentences for full credit)</td></tr>
<tr><td> <em>Response:</em> <p>HTML Canvas is used to draw on a webpage. It can be 2<br>dimensional or 3 dimensional. The two dimensional version is essentially a canvas, where<br>each element can be drawn on like you would draw paint on a<br>canvas. Each subsequent layer is placed atop all previous layers. Functionality can be<br>added with javascript.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/hw-html5-canvas-game/grade/rjm8" target="_blank">Grading</a></td></tr></table>
