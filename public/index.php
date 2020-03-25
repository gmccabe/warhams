<?php include('inc/header.php'); ?>

<!-- <h4>A <a href="https://goonhammer.com">Goonhammer</a> Production</h4> -->

<!--
Uncomment if there's known outages
<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title">Ahh crap</h3>
    </div>
    <div class="panel-body">
        <p>
            oh no
        </p>
    </div>
</div>
-->

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">What is ButtScribe?</h3>
    </div>
    <div class="panel-body">
        <p><em>"The name is quite odd, but it works"</em> - User Review</p>
        <ul>
            <li><a href="/40k.php">40k 8th Edition</a></li>
            <!-- <li><a href="/kt.php">Kill Team</a></li> -->
        </ul>  
        <p>ButtScribe is a web application that runs off of BattleScribe output, and generates printable datasheets for the units in your army. It currently supports Warhammer 40k (8th Edition) and Kill-Team. The goal with ButtScribe was to bridge the gap in <em>printed materials</em>: the codices have nicely-formatted unit entries, but these are intended for selecting a unit's options, so it has a raft of information that might not be relevant depending on what options you took, and they don't include the actual points/PL costs of your specific unit. That is, the codex will have all of the wargear and rules for <em>a</em> Tactical Squad, but what you really want during a game is the wargear and rules for <em>your</em> Tactical squads, which is where ButtScribe comes in.</p>
        <p>Also, BattleScribe does, obviously, support printing army lists, as anyone who has ever played 40k can tell you. The problem is that those lists look like butt.</p>
        <!-- <p>The list of supported games is in the header up top, and if you run into any problems, feel free to <a href="mailto:contact@goonhammer.com">email me</a></p> -->
    </div>
</div>

<p>
    <a href="/output.png">
        <img src="/output.png" alt="Output data card example" width="700px"/>
    </a>
</p>
<p>
    <img src="output_kt.png" alt="Output data card example" width="350px"/><img src="output_kard.png" alt="Output data card example" width="350px"/>
</p>

<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title">Known Issues</h3>
    </div>
    <div class="panel-body">
        <ul>
            <li>Wound trackers/degrading statlines for vehicle squadrons (IG Hellhounds) don't want to work.</li>
        </ul>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Credits</h3>
    </div>
    <div class="panel-body">
        <h5>This is a customized fork of the <a href="https://github.com/gregchiasson/warhams">original code base</a>:</h5>
        <ul>
            <li>Brains of this outfit: Robert "TheChirurgeon" Jones"</li>
            <li>Code: Greg Chiasson</li>
        </ul>
    </div>
</div>

<?php include('inc/footer.php'); ?>
