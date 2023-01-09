<html lang="zh-CN">
<head>
    <title>提交结果</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
<div class="content-box">
    <fieldset id="base">
        <legend>提交信息</legend>
        <p>名字：<?php $name = $_REQUEST["name"] ?? "未指定！";
            if (!empty($name)) echo $name; ?></p>
        <p>性别：<?php $gender = $_REQUEST["gender"] ?? "未指定！";
            if (!empty($gender)) echo $gender; ?></p>
        <p>喜欢的Arcaea角色：<?php $ch = $_REQUEST["character"] ?? "未指定！";
            if (!empty($ch)) echo $ch; ?></p>
        <p><?php $info = $_REQUEST["per_info"] ?? "未指定！";
            if (!empty($info)) echo "自我介绍：" . $info; ?></p>
    </fieldset>
    <fieldset id="author-info">
        <legend id="author">作者信息</legend>
        <p>页面制作时间：
            <time datetime="2019-10-31">2019年10月31日</time>
        </p>
        <p>页面上次修改时间：
            <time datetime="2019-11-7">2019年11月7日</time>
        </p>
        <p>制作人姓名：xxx</p>
        <p>制作人学号：2017xxxxxx</p>
    </fieldset>
</div>
</body>
</html>

