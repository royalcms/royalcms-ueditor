<?php
/**
 * ueditor完整配置项
 * 可以在这里配置整个编辑器的特性
 */
return array(
    
    /**
     * 和原 UEditor /ueditor.config.js 配置完全相同
     */
    /**************************提示********************************
     * 所有被注释的配置项均为UEditor默认值。
     * 修改默认配置请首先确保已经完全明确该参数的真实用途。
     * 主要有两种修改方案，一种是取消此处注释，然后修改成对应参数；另一种是在实例化编辑器时传入对应参数。
     * 当升级编辑器时，可直接使用旧版配置文件替换新版配置文件,不用担心旧版配置文件中因缺少新功能所需的参数而导致脚本报错。
     **************************提示********************************/
    'editor' => array(
        /* 为编辑器实例添加一个路径，这个不能被注释 */
        /**
         * 编辑器资源文件根路径。它所表示的含义是：以编辑器实例化页面为当前路径，指向编辑器资源文件（即dialog等文件夹）的路径。
         * 鉴于很多同学在使用编辑器的时候出现的种种路径问题，此处强烈建议大家使用"相对于网站根目录的相对路径"进行配置。
         * "相对于网站根目录的相对路径"也就是以斜杠开头的形如"/myProject/ueditor/"这样的路径。
         * 如果站点中有多个不在同一层级的页面需要实例化编辑器，且引用了同一UEditor的时候，此处的URL可能不适用于每个页面的编辑器。
         * 因此，UEditor提供了针对不同页面的编辑器可单独配置的根路径，具体来说，在需要实例化编辑器的页面最顶部写上如下代码即可。当然，需要令此处的URL等于对应的配置。
         * window.UEDITOR_HOME_URL = "/xxxx/xxxx/";
         */
        'UEDITOR_HOME_URL' => '',
        
        /* 服务器统一请求接口路径 */
        'serverUrl' => '/index.php/_ueditor/server',
        
        /* 工具栏上的所有的功能按钮和下拉框，可以在new编辑器的实例时选择自己需要的从新定义 */
        'toolbars' => array(
            array(
                'fullscreen', 'source', '|', 'undo', 'redo', '|',
                'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
                'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
                'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
                'directionalityltr', 'directionalityrtl', 'indent', '|',
                'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
                'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
                'simpleupload', 'insertimage', 'emotion', 'scrawl', 'insertvideo', 'music', 'attachment', 'map', 'gmap', 'insertframe', 'insertcode', 'webapp', 'pagebreak', 'template', 'background', '|',
                'horizontal', 'date', 'time', 'spechars', 'snapscreen', 'wordimage', '|',
                'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol', 'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols', 'charts', '|',
                'print', 'preview', 'searchreplace', 'drafts', 'help'
            ),
        ),
        
        /* 语言配置项,默认是zh_CN。有需要的话也可以使用如下这样的方式来自动多语言切换，当然，前提条件是lang文件夹下存在对应的语言文件： */
        /* lang值也可以通过自动获取 (navigator.language||navigator.browserLanguage ||navigator.userLanguage).toLowerCase() */
        'lang' => 'zh_CN',
        
        /* 主题配置项,默认是default。有需要的话也可以使用如下这样的方式来自动多主题切换，当然，前提条件是themes文件夹下存在对应的主题文件： */
        /* 现有如下皮肤:default */
        'theme' => 'default',
        
        /* autoHeightEnabled 是否自动长高,默认true */
        'autoHeightEnabled' => false,

        /* autoFloatEnabled 是否保持toolbar的位置不动,默认true */
        'autoFloatEnabled' => false,
        /* 浮动时工具栏距离浏览器顶部的高度，用于某些具有固定头部的页面 */
        'topOffset' => 40,
        /* 编辑器底部距离工具栏高度(如果参数大于等于编辑器高度，则设置无效) */
        'toolbarTopOffset' => 0,
    ),
    
    /**
     * 和原 UEditor /php/config.json 配置完全相同
     *
     */
    /* 上传图片配置项 */
    'upload' => array(
        /* 执行上传图片的action名称 */
        "imageActionName" => "uploadimage", 
        
        /* 提交的图片表单名称 */
        "imageFieldName" => "upfile", 
        
        /* 上传大小限制，单位B */
        "imageMaxSize" => 2048000, 
        
        /* 上传图片格式显示 */
        "imageAllowFiles" => array(".png", ".jpg", ".jpeg", ".gif", ".bmp"), 
        
        /* 是否压缩图片,默认是true */
        "imageCompressEnable" => true, 
        
        /* 图片压缩最长边限制 */
        "imageCompressBorder" => 1600, 
        
        /* 插入的图片浮动方式 */
        "imageInsertAlign" => "none", 
        
        /* 图片访问路径前缀 */
        "imageUrlPrefix" => "", 
        
        /* 上传保存路径,可以自定义保存路径和文件名格式 */
        "imagePathFormat" => "data/descimg/{yyyy}{mm}{dd}/{time}{rand:6}",
         
        /* {filename} 会替换成原文件名,配置这项需要注意中文乱码问题 */
        /* {rand:6} 会替换成随机数,后面的数字是随机数的位数 */
        /* {time} 会替换成时间戳 */
        /* {yyyy} 会替换成四位年份 */
        /* {yy} 会替换成两位年份 */
        /* {mm} 会替换成两位月份 */
        /* {dd} 会替换成两位日期 */
        /* {hh} 会替换成两位小时 */
        /* {ii} 会替换成两位分钟 */
        /* {ss} 会替换成两位秒 */
        /* 非法字符 \ : * ? " < > | */
        /* 具请体看线上文档: fex.baidu.com/ueditor/#use-format_upload_filename */

        /* 涂鸦图片上传配置项 */
        /* 执行上传涂鸦的action名称 */
        "scrawlActionName" => "uploadscrawl", 
        
        /* 提交的图片表单名称 */
        "scrawlFieldName" => "upfile", 
        
        /* 上传保存路径,可以自定义保存路径和文件名格式 */
        "scrawlPathFormat" => "data/descimg/{yyyy}{mm}{dd}/{time}{rand:6}", 
        /* 上传大小限制，单位B */
        "scrawlMaxSize" => 2048000, 
        /* 图片访问路径前缀 */
        "scrawlUrlPrefix" => "", 
        "scrawlInsertAlign" => "none",

        /* 截图工具上传 */
        /* 执行上传截图的action名称 */
        "snapscreenActionName" => "uploadimage", 
        /* 上传保存路径,可以自定义保存路径和文件名格式 */
        "snapscreenPathFormat" => "data/descimg/{yyyy}{mm}{dd}/{time}{rand:6}",
        /* 图片访问路径前缀 */
        "snapscreenUrlPrefix" => "", 
        /* 插入的图片浮动方式 */
        "snapscreenInsertAlign" => "none", 

        /* 抓取远程图片配置 */
        "catcherLocalDomain" => array("127.0.0.1", "localhost", "img.baidu.com"),
        /* 执行抓取远程图片的action名称 */
        "catcherActionName" => "catchimage", 
        /* 提交的图片列表表单名称 */
        "catcherFieldName" => "source", 
        /* 上传保存路径,可以自定义保存路径和文件名格式 */
        "catcherPathFormat" => "data/descimg/{yyyy}{mm}{dd}/{time}{rand:6}", 
        /* 图片访问路径前缀 */
        "catcherUrlPrefix" => "", 
        /* 上传大小限制，单位B */
        "catcherMaxSize" => 2048000, 
        /* 抓取图片格式显示 */
        "catcherAllowFiles" => array(".png", ".jpg", ".jpeg", ".gif", ".bmp"), 

        /* 上传视频配置 */
        /* 执行上传视频的action名称 */
        "videoActionName" => "uploadvideo", 
        /* 提交的视频表单名称 */
        "videoFieldName" => "upfile", 
        /* 上传保存路径,可以自定义保存路径和文件名格式 */
        "videoPathFormat" => "data/descvideo/{yyyy}{mm}{dd}/{time}{rand:6}", 
        /* 视频访问路径前缀 */
        "videoUrlPrefix" => "", 
        /* 上传大小限制，单位B，默认100MB */
        "videoMaxSize" => 102400000, 
        /* 上传视频格式显示 */
        "videoAllowFiles" => array(
            ".flv", ".swf", ".mkv", ".avi", ".rm", ".rmvb", ".mpeg", ".mpg",
            ".ogg", ".ogv", ".mov", ".wmv", ".mp4", ".webm", ".mp3", ".wav", ".mid"), 

        /* 上传文件配置 */
        /* controller里,执行上传视频的action名称 */
        "fileActionName" => "uploadfile", 
        /* 提交的文件表单名称 */
        "fileFieldName" => "upfile", 
        /* 上传保存路径,可以自定义保存路径和文件名格式 */
        "filePathFormat" => "data/descfile/{yyyy}{mm}{dd}/{time}{rand:6}", 
        /* 文件访问路径前缀 */
        "fileUrlPrefix" => "", 
        /* 上传大小限制，单位B，默认50MB */
        "fileMaxSize" => 51200000, 
        /* 上传文件格式显示 */
        "fileAllowFiles" => array(
            ".png", ".jpg", ".jpeg", ".gif", ".bmp",
            ".flv", ".swf", ".mkv", ".avi", ".rm", ".rmvb", ".mpeg", ".mpg",
            ".ogg", ".ogv", ".mov", ".wmv", ".mp4", ".webm", ".mp3", ".wav", ".mid",
            ".rar", ".zip", ".tar", ".gz", ".7z", ".bz2", ".cab", ".iso",
            ".doc", ".docx", ".xls", ".xlsx", ".ppt", ".pptx", ".pdf", ".txt", ".md", ".xml"
        ), 

        /* 列出指定目录下的图片 */
        /* 执行图片管理的action名称 */
        "imageManagerActionName" => "listimage", 
        /* 指定要列出图片的目录 */
        "imageManagerListPath" => "data/descimg/", 
        /* 每次列出文件数量 */
        "imageManagerListSize" => 20, 
        /* 图片访问路径前缀 */
        "imageManagerUrlPrefix" => "", 
        /* 插入的图片浮动方式 */
        "imageManagerInsertAlign" => "none", 
        /* 列出的文件类型 */
        "imageManagerAllowFiles" => array(".png", ".jpg", ".jpeg", ".gif", ".bmp"), 

        /* 列出指定目录下的文件 */
        /* 执行文件管理的action名称 */
        "fileManagerActionName" => "listfile", 
        /* 指定要列出文件的目录 */
        "fileManagerListPath" => "data/descfile/", 
        /* 文件访问路径前缀 */
        "fileManagerUrlPrefix" => "", 
        /* 每次列出文件数量 */
        "fileManagerListSize" => 20, 
        /* 列出的文件类型 */
        "fileManagerAllowFiles" => array(
            ".png", ".jpg", ".jpeg", ".gif", ".bmp",
            ".flv", ".swf", ".mkv", ".avi", ".rm", ".rmvb", ".mpeg", ".mpg",
            ".ogg", ".ogv", ".mov", ".wmv", ".mp4", ".webm", ".mp3", ".wav", ".mid",
            ".rar", ".zip", ".tar", ".gz", ".7z", ".bz2", ".cab", ".iso",
            ".doc", ".docx", ".xls", ".xlsx", ".ppt", ".pptx", ".pdf", ".txt", ".md", ".xml"
        )
    )

);
