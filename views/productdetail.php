<?php
extract($svtm);
?>
<main>
    <div class="container">
        <div class="character-details">
            <div class="character-image">
                <img src="img/<?=$image?>" alt="Nhân vật" id="main-image" width="300px">
            </div>
            <div class="character-info" id="character-info">
                <h2>Thông tin nhân vật</h2>
                <p><strong>Tên:</strong> <?=$name?> </p>
                <?=$moTa?>
                <!-- <p><strong>Xuất thân:</strong> Công nương Lucial là con gái duy nhất của Vua Solaris và Hoàng hậu Selene. Ngay từ nhỏ, cô đã được đào tạo võ thuật và nghệ thuật chiến đấu, cùng với kiến thức sâu rộng về chiến lược và lãnh đạo. Lucial nổi
                    bật với lòng dũng cảm và tài năng chiến đấu, trở thành một biểu tượng của hy vọng và sức mạnh cho người dân Sunland. •</p>
                <p><strong>Tính cách:</strong> Lucial là một người phụ nữ mạnh mẽ, quyết đoán và thông minh. Cô luôn sẵn lòng chiến đấu vì công lý và bảo vệ người dân. Dù có vẻ ngoài cứng rắn, Lucial cũng có một trái tim nhân hậu và luôn quan tâm đến những
                    người yếu thế.</p> -->
            </div>
        </div>
        <div class="kynang">
            <h2>Khả năng chiến đấu</h2>

            <div class="skills">


                <div class="skill">
                    <i class="fa-solid fa-h" onclick="showSkillInfo(1)"></i>

                </div>
                <div class="skill">
                    <i class="fa-solid fa-l" onclick="showSkillInfo(2)"></i>

                </div>
                <div class="skill">
                    <i class="fa-solid fa-k" onclick="showSkillInfo(3)"></i>

                </div>
                <div class="skill">
                    <i class="fa-solid fa-j" onclick="showSkillInfo(4)"></i>


                </div>
            </div>
            <div class="anhchieu" id="anhchieu">
                <img src="skill1.png">
            </div>
            <div class="thongtinchieu" id="thongtinchieu">
               <?=$H?>
            </div>
            <div class="thongtinchieu" id="thongtinchieu">
               <?=$L?>
            </div>
            <div class="thongtinchieu" id="thongtinchieu">
               <?=$K?>
            </div>
            <div class="thongtinchieu" id="thongtinchieu">
               <?=$J?>
            </div>

        </div>

    </div>
</main>
    <script>
        function showSkillInfo(skillId) {
            var skillInfo = document.getElementById("thongtinchieu");
            var skillImage = document.getElementById("anhchieu")
            switch (skillId) {
                case 1:
                    skillInfo.innerHTML = `<?=$H?>`;
                    skillImage.src = "skill-1.jpg";
                    break;
                case 2:
                    skillInfo.innerHTML = ` <?=$J?>`;
                    skillImage.src = "skill-2.jpg";
                    break;
                case 3:

                    skillInfo.innerHTML = " <?=$K?>";
                    skillImage.src = "skill-3.jpg";
                    break;
                case 4:

                    skillInfo.innerHTML = " <?=$L?>";
                    skillImage.src = "skill-3.jpg";
                    break;
                default:
                    break;
            }
        }
    </script>