<!-- view for persons for a main page -->
<div class="content__person decoration__select_none">
    <div class="headline decoration__select_none">
        <span>Наша комманда</span>
    </div>

    <div class="content__person_box">
        <?php
            foreach ( $data as $row )
            {
               echo 
                    '<div class="content__person_elem">
                    
                        <div class="content__person_img">
                            <div class="content__person_img_elem" style="background-image: url(' 
                                . $row['Img'] .
                            ')">
                            </div>
                        </div>
                    
                        <div class="content__person_info">
                            <span class="content__person_fio">'
                                . $row['FirstName'] . ' '
                                . $row['LastName'] . ' ' 
                                . '- ' 
                                . $row['Position'] . 
                            '</span> 
                            <p>' 
                                . $row['About'] . 
                            '</p>
                        </div> 

                    </div>';
            }

        ?>
    </div>
</div>

<div class="content__article decoration__select_none">
    <div class="content__article_box">
        <div class="content__article_elem">
            <div class="content__article_body">
                <span class="content__article_title">
                    <h1>Знания - сила</h1> 
                </span>
                <span class="content__article_article">
                    Сотрудники центра имеют специальное высшее образование и проходили обучение:
                    <ul>
                        <li>
                            в центре кинезитерапии Бубновского, Россия, г. Москва;
                        </li>
                        <li>
                            в международном реабилитационном центре «Адели», Словакия, г. Пьештяны;
                        </li>
                        <li>
                            в международном центре «WorldClass» Россия, г. Москва.
                        </li>
                    </ul>
                </span>
            </div>
        </div> 
    </div>
</div>