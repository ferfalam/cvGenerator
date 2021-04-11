<?php require 'config.php';

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title><?php echo $title ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<!-- Generated with phpCV v<?php echo $version ?>, made by Pierre Mavro -->

	<meta name="generator" content="phpCV v<?php echo $version ?>" />
	<meta name="keywords" content="CV, Curriculum Vitae, <?php echo $my_name ?>" />
	<meta name="description" content="" />
	<link rel="stylesheet" type="text/css" href="cv.css" media="all" />

</head>
<body>
	<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1><?php echo $my_name ?></h1>
				</div>

				<div class="yui-u">
					<div class="contact-info">
                        <?php 
                        foreach  ($personnal_infos_full as  $line){
	    	                echo "<h3 align=\"center\">" .  $line . "</h3>";
                        } 
                        ?>
                    </div>
				</div>
			</div>
		</div>
		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">
					<div class="yui-gf">
                        <div class="yui-u first">
							<h2><?php echo $profile_title ?></h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
							<?php echo $profile_desc ?>
							</p>
						</div>
					</div>
					<div class="yui-gf">
						<div class="yui-u first">
						<h2><?php echo $aim_title ?></h2>
					</div>
						<div class="yui-u">
							<p class="enlarge">
                            <?php echo $aim_desc ?>
							</p>

						</div>
					</div>
					<div class="yui-gf">
						<div class="yui-u first">
							<h2><?php echo $skills_name ?></h2>
						</div>
						<div class="yui-u">
								<div class="talent">
									<h2><?php echo $first_skill ?></h2>
									<p><?php echo $first_skill_desc ?></p>
								</div>

								<div class="talent">
									<h2><?php echo $second_skill ?></h2>
									<p><?php echo $second_skill_desc ?></p>
								</div>

								<div class="talent">
									<h2><?php echo $third_skill ?></h2>
									<p><?php echo $third_skill_desc ?></p>
								</div>
						</div>
					</div>
						<div class="yui-gf">
						<div class="yui-u first">
							<h2><?php echo $knowledges_title ?></h2>
						</div>
						<div class="yui-u">
							<ul class="talent">
							<?php
                                $num_knowledges = count($first_knowledges);
                                $i=1;
                                foreach  ($first_knowledges as  $line)
                                {
                                    if  ($i <  $num_knowledges)
                                    {
                                        echo "<li>" .  $line . "</li>";
                                    }
                                    else
                                    {
                                        echo "<li class=\"last\">" .  $line. "</li>";
                                    }
                                    $i++;
                                }
                            ?>
							</ul>

						</div>
					</div>
						<div class="yui-gf">
	
						<div class="yui-u first">
							<h2><?php echo $experience_title ?></h2>
						</div>

						<div class="yui-u">
							<?php 
                                $num_all_jobs = count ($all_jobs);
                                $i=2;
                                for  ($row = 0;  $row <  $num_all_jobs;  $row++)
                                {
                                    // Calcul descriptions lines number
                                     $num_lines_desc = count ($all_jobs [$row]);
                            
                                    // Detect if last job of the list (first job in fact)
                                    if  ($row !=  ($num_all_jobs - 1))
                                    {
                                        echo "<div class=\"job\">";
                                    }
                                    else
                                    {
                                        echo "<div class=\"job last\">";
                                    }
                            
                                    // echo lines
                                    for  ($col = 0; $col < $num_lines_desc;  $col++)
                                    {
                                        if  ($i < 5)
                                        {
                                            echo "\t<h" . $i . ">" . $all_jobs [$row] [$col] . "</h" .  $i . ">";
                                        }
                                        else
                                        {
                                            echo "\t<p align=\"justify\">" .  $all_jobs [$row] [$col] . "</p>";
                                        }
                                        $i++;
                                    }
                                    echo "</div>";
                                    $i=2;
                                }                            
                            ?>
						</div>
					</div>
					<div class="yui-gf">
						<div class="yui-u first">
							<h2><?php echo $education_title ?></h2>
						</div>
						<?php 
                            $num_all_education = count ($all_education);
                            for  ($row = 0; $row < ($num_all_education);  $row++)
                            {
                                $num_row = count ($all_education[$row]);
                                    echo "<div class=\"yui-u\">";
                                        echo "<h3>• " . $all_education [$row][0] ?? "" . "</h3><br>";
                                        echo "<p>".$all_education [$row][1] ?? "" . "</p>";
                                        echo "<br/>";
                                    echo "</div>";
                            }                        
                        ?>
					</div>
					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Loisirs</h2>
						</div>
						<div class="yui-u">
						<?php
                            foreach  ($hobby_list as  $fun)
                            {
                                echo "<h3>• " .  $fun . "</h3>";
                            }
                        ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="ft">
			<p><?php echo $my_name ?> - <a href=<?php  "http://" .$_SERVER["SERVER_NAME"] ?>>http://<?php  echo $_SERVER["SERVER_NAME"] ?></a></p><br />
		</div>
	</div>
</div>

</body>
</html>