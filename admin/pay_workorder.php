<?php
include("../includes/common.php");

$title = '投诉处理';
include './head.php';
if ($islogin == 1) {
} else
    exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
<style>
    #orderItem .orderTitle {
        word-break: keep-all;
    }

    #orderItem .orderContent {
        word-break: break-all;
    }

    .dates {
        max-width: 120px;
    }

    @media screen and (max-width: 767px) {
        .table-responsive {
            overflow-y: auto;
        }
    }
</style>
<div class="block">
			<div class="block-title">
				<h3 class="panel-title"> 订单投诉</h3>
			</div>
        <form onsubmit="return searchSubmit()" method="GET" class="form-inline" id="searchToolbar">
            <input type="hidden" class="form-control" name="gid">
            <input type="hidden" class="form-control" name="upid">
            <div class="form-group">
                <label>搜索</label>
                <select name="column" class="form-control">
                    <option value="orderid">订单号</option>
                    <option value="qq">QQ</option>
                    <option value="phone">手机号码</option>
                    <option value="status">回复状态</option>
                    <option value="block">拉黑状态</option>
                </select>
            </div>
            <div class="form-group" id="Souquery">
                <input type="text" class="form-control" name="value" placeholder="搜索内容">
            </div>
            <button type="submit" class="btn btn-primary">搜索</button>
            <a href="javascript:searchClear()" class="btn btn-default" title="刷新投诉列表"><i
                        class="fa fa-refresh"></i></a>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">批量操作 <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="javascript:replyAll()">批量回复</a>
                    <li><a href="javascript:blockAll()">批量拉黑</a>
                    <li><a href="javascript:unblockAll()">批量解除拉黑</a>
                    <li><a href="javascript:delAll()">删除投诉</a>
                </ul>
            </div>
            <button class="btn btn-info" type="button"><a href="./set.php?mod=cron" style="color:white">计划任务配置</a></button>
        </form>
        <table id="listTable">
        </table>
    </div>
</div>
<script src="<?php echo $cdnpublic ?>layer/3.1.1/layer.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/axios/1.2.2/axios.js"></script>
<script src="<?php echo $cdnpublic ?>clipboard.js/1.7.1/clipboard.min.js"></script>
<script src="<?php echo $cdnpublic ?>bootstrap-table/1.20.2/bootstrap-table.min.js"></script>
<script src="<?php echo $cdnpublic ?>bootstrap-table/1.20.2/extensions/page-jump-to/bootstrap-table-page-jump-to.min.js"></script>
<script src="../assets/js/custom.js"></script>
<script>
    $('#listTable').bootstrapTable({
        method: 'post',
        url : 'ajax_workorder.php?act=query',
        columns: [{
            field: '',
            checkbox: true
        },
            {
                field: 'id',
                title: 'ID',
                align: 'center',
                valign: 'middle'
            },
            {
                field: 'orderid',
                title: '订单号',
                formatter: function(value, row, index) {
                    return '<a href="javascript:showOrder(\''+value+'\')" title="点击查看详情">'+value+'</a></b><br/>';
                }
            },
            {
                field: 'qq',
                title: 'QQ',
                align: 'center',
                valign: 'middle'
            },
            {
                field: 'phone',
                title: '手机号码',
                align: 'center',
                valign: 'middle'
            },
            {
                field: 'addtime',
                title: '投诉时间',
                align: 'center',
                valign: 'middle'
            },
            {
                field: 'content',
                title: '投诉内容',
                align: 'center',
                valign: 'middle'
            },
            {
                field: 'reply',
                title: '回复内容',
                align: 'center',
                valign: 'middle'
            },
            {
                field: 'status',
                title: '状态',
                align: 'center',
                valign: 'middle',
                formatter: function (value, row, index) {
                    if (value == 2) {
                        return '<span class="label label-danger">未处理</span>';
                    } else if (value == 1) {
                        return '<span class="label label-success">已处理</span>';
                    }
                }
            },
            {
                field: 'block',
                title: '是否拉黑',
                align: 'center',
                valign: 'middle',
                formatter: function (value, row, index) {
                    if (row.block == 2) {
                        return '<a href="javascript:unblock(\'' + row.id + '\')" class="btn btn-xs btn-info">解除拉黑</a>';
                    } else {
                        return '<a href="javascript:block(\'' + row.id + '\')" class="btn btn-xs btn-danger">拉黑</a>';
                    }
                }
            },
            {
                field: 'id',
                title: '操作',
                align: 'center',
                valign: 'middle',
                formatter: function (value, row, index) {
                    return '<a href="javascript:reply(\'' + row.id + '\')" class="btn btn-xs btn-primary" style="margin:2px">回复</a><a href="javascript:del(\'' + row.id + '\')" class="btn btn-xs btn-danger" style="margin:2px">删除</a>';
                }
            }
        ],
        queryParams: function (params) {
            return {
                type: $("select[name='column']").val(),
                value: $("input[name='value']").val(),
            };
        },
        responseHandler: function (res) {
            return {
                total: res.total,
                rows: res.data
            };
        },
    });

    function searchSubmit() {
        var column = $('select[name="column"]').val();
        var value = $('input[name="value"]').val();
        if (column == 'orderid' && !/^\d+$/.test(value)) {
            layer.alert('订单号只能为纯数字', {
                icon: 2
            });
            return false;
        }
        if (column == 'qq' && !/^\d+$/.test(value)) {
            layer.alert('QQ只能为纯数字', {
                icon: 2
            });
            return false;
        }
        if (column == 'phone' && !/^\d+$/.test(value)) {
            layer.alert('手机号只能为纯数字', {
                icon: 2
            });
            return false;
        }
        if (column == 'status' && !/^\d+$/.test(value)) {
            layer.alert(`状态只能为1和2<br><span style="color: green">1为已处理</span><br><span style="color: blue">2为未处理</span>`, {
                icon: 2
            });
            return false;
        }
        if (column == 'block' && !/^\d+$/.test(value)) {
            layer.alert(`状态只能为1和2<br><span style="color: green">1为未拉黑</span><br><span style="color: blue">2为已拉黑</span>`, {
                icon: 2
            });
            return false;
        }
        $('#listTable').bootstrapTable('refresh');
        return false;
    }
    function showOrder(trade_no) {
        var ii = layer.load(2, {shade:[0.1,'#fff']});
        var status = ['<span class="label label-primary">未支付</span>','<span class="label label-success">已支付</span>','<span class="label label-red">已退款</span>'];
        $.ajax({
            type : 'GET',
            url : 'ajax_order.php?act=order&trade_no='+trade_no,
            dataType : 'json',
            success : function(data) {
                layer.close(ii);
                if(data.code == 0){
                    var data = data.data;
                    var item = '<table class="table table-condensed table-hover" id="orderItem">';
                    item += '<tr><td colspan="6" style="text-align:center" class="orderTitle"><b>订单信息</b></td></tr>';
                    item += '<tr class="orderTitle"><td class="info" class="orderTitle">系统订单号</td><td colspan="5" class="orderContent">'+data.trade_no+'</td></tr>';
                    item += '<tr><td class="info" class="orderTitle">商户订单号</td><td colspan="5" class="orderContent">'+data.out_trade_no+'</td></tr>';
                    item += '<tr><td class="info" class="orderTitle">接口订单号</td><td colspan="5" class="orderContent">'+data.api_trade_no+'</td></tr>';
                    item += '<tr><td class="info">商户ID</td class="orderTitle"><td colspan="5" class="orderContent"><a href="./ulist.php?my=search&column=uid&value='+data.uid+'" target="_blank">'+data.uid+'</a></td>';
                    item += '</tr><tr><td class="info" class="orderTitle">支付方式</td><td colspan="5" class="orderContent">'+data.typename+'</td></tr>';
                    item += '</tr><tr><td class="info" class="orderTitle">支付通道</td><td colspan="5" class="orderContent">'+data.channelname+'</td></tr>';
                    item += '</tr><tr><td class="info" class="orderTitle">商品名称</td><td colspan="5" class="orderContent">'+data.name+'</td></tr>';
                    item += '</tr><tr><td class="info" class="orderTitle">订单金额</td><td colspan="5" class="orderContent">'+data.money+'</td></tr>';
                    item += '</tr><tr><td class="info" class="orderTitle">实际支付金额</td><td colspan="5" class="orderContent">'+data.realmoney+'</td></tr>';
                    item += '</tr><tr><td class="info" class="orderTitle">商户分成金额</td><td colspan="5" class="orderContent">'+data.getmoney+'</td></tr>';
                    item += '</tr><tr><td class="info" class="orderTitle">创建时间</td><td colspan="5" class="orderContent">'+data.addtime+'</td></tr>';
                    item += '</tr><tr><td class="info" class="orderTitle">完成时间</td><td colspan="5" class="orderContent">'+data.endtime+'</td></tr>';
                    item += '</tr><tr><td class="info" class="orderTitle" title="只有在官方通道支付完成后才能显示">支付账号</td><td colspan="5" class="orderContent">'+data.buyer+'</td></tr>';
                    item += '</tr><tr><td class="info" class="orderTitle">网站域名</td><td colspan="5" class="orderContent"><a href="http://'+data.domain+'" target="_blank" rel="noreferrer">'+data.domain+'</a></td></tr>';
                    item += '</tr><tr><td class="info" class="orderTitle">支付IP</td><td colspan="5" class="orderContent"><a href="https://m.ip138.com/iplookup.asp?ip='+data.ip+'" target="_blank" rel="noreferrer">'+data.ip+'</a></td></tr>';
                    item += '<tr><td class="info" class="orderTitle">业务扩展参数</td><td colspan="5" class="orderContent">'+data.param+'</td></tr>';
                    item += '<tr><td class="info" class="orderTitle">订单状态</td><td colspan="5" class="orderContent">'+status[data.status]+'</td></tr>';
                    if(data.status>0){
                        item += '<tr><td class="info" class="orderTitle">通知状态</td><td colspan="5" class="orderContent">'+(data.notify==0?'<span class="label label-success">通知成功</span>':'<span class="label label-danger">通知失败</span>（已通知'+data.notify+'次）')+'</td></tr>';
                    }
                    item += '<tr><td colspan="6" style="text-align:center" class="orderTitle"><b>订单操作</b></td></tr>';
                    item += '<tr><td colspan="6"><a href="javascript:callnotify(\''+data.trade_no+'\')" class="btn btn-xs btn-default">重新通知(异步)</a>&nbsp;<a href="javascript:callreturn(\''+data.trade_no+'\')" class="btn btn-xs btn-default">重新通知(同步)</a></td></tr>';
                    item += '</table>';
                    var area = [$(window).width() > 480 ? '480px' : '100%'];
                    layer.open({
                        type: 1,
                        area: area,
                        title: '订单详细信息',
                        skin: 'layui-layer-rim',
                        content: item
                    });
                }else{
                    layer.alert(data.msg);
                }
            },
            error:function(data){
                layer.msg('服务器错误');
                return false;
            }
        });
    }

    function searchClear() {
        window.location.reload();
    }

    function del(id) {
        layer.confirm('您确定要删除这条投诉吗？', {
            icon: 3,
            title: '提示'
        }, async function (index) {
            layer.close(index);
            const {
                data
            } = await $.post('ajax_workorder.php?act=del', {
                id: id
            }, function (res) {
                if (res.code == 1) {
                    layer.alert(res.msg, {
                        icon: 1
                    }, function () {
                        window.location.reload();
                    });
                } else {
                    layer.alert(res.msg, {
                        icon: 2
                    });
                }
            })
        });
    }

    function reply(id) {
        layer.prompt({
            title: '请输入回复内容',
            formType: 2
        }, async function (text, index) {
            layer.close(index);
            const {
                data
            } = await $.post('ajax_workorder.php?act=reply', {
                id: id,
                reply: text
            }, function (res) {
                if (res.code == 1) {
                    layer.alert(res.msg, {
                        icon: 1
                    }, function () {
                        window.location.reload();
                    });
                } else {
                    layer.alert(res.msg, {
                        icon: 2
                    });
                }
            })
        });
    }

    function block(id) {
        layer.confirm('您确定要拉黑这条投诉吗？', {
            icon: 3,
            title: '提示'
        }, async function (index) {
            layer.close(index);
            const {
                data
            } = await $.post('ajax_workorder.php?act=block', {
                id: id
            }, function (res) {
                if (res.code == 1) {
                    layer.alert(res.msg, {
                        icon: 1
                    }, function () {
                        window.location.reload();
                    });
                } else {
                    layer.alert(res.msg, {
                        icon: 2
                    });
                }
            })
        });
    }

    function unblock(id) {
        layer.confirm('您确定要解除拉黑这条投诉吗？', {
            icon: 3,
            title: '提示'
        }, async function (index) {
            layer.close(index);
            const {
                data
            } = await $.post('ajax_workorder.php?act=block', {
                id: id
            }, function (res) {
                if (res.code == 1) {
                    layer.alert(res.msg, {
                        icon: 1
                    }, function () {
                        window.location.reload();
                    });
                } else {
                    layer.alert(res.msg, {
                        icon: 2
                    });
                }
            })
        });
    }

    function replyAll() {
        var ids = $.map($('#listTable').bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        if (ids.length == 0) {
            layer.alert('请先选择要回复的投诉', {
                icon: 2
            });
            return false;
        }
        layer.prompt({
            title: '请输入回复内容',
            formType: 2
        }, async function (text, index) {
            layer.close(index);
            layer.msg('正在回复', {
                icon: 16,
                shade: 0.01
            });
            const {
                data
            } = await $.post('ajax_workorder.php?act=replyAll', {
                ids: ids,
                reply: text
            }, function (res) {
                if (res.code == 1) {
                    layer.alert(res.msg, {
                        icon: 1
                    }, function () {
                        window.location.reload();
                    });
                } else {
                    layer.alert(res.msg, {
                        icon: 2
                    });
                }
            })
        });
    }

    function blockAll(){
        var ids = $.map($('#listTable').bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        if (ids.length == 0) {
            layer.alert('请先选择要拉黑的投诉', {
                icon: 2
            });
            return false;
        }
        layer.confirm('您确定要拉黑这些投诉吗？', {
            icon: 3,
            title: '提示'
        }, async function (index) {
            layer.close(index);
            layer.msg('正在拉黑', {
                icon: 16,
                shade: 0.01
            });
            const {
                data
            } = await $.post('ajax_workorder.php?act=blockAll', {
                ids: ids
            }, function (res) {
                if (res.code == 1) {
                    layer.alert(res.msg, {
                        icon: 1
                    }, function () {
                        window.location.reload();
                    });
                } else {
                    layer.alert(res.msg, {
                        icon: 2
                    });
                }
            })
        });
    }

    function unblockAll(){
        var ids = $.map($('#listTable').bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        if (ids.length == 0) {
            layer.alert('请先选择要解除拉黑的投诉', {
                icon: 2
            });
            return false;
        }
        layer.confirm('您确定要解除拉黑这些投诉吗？', {
            icon: 3,
            title: '提示'
        }, async function (index) {
            layer.close(index);
            layer.msg('正在解除拉黑', {
                icon: 16,
                shade: 0.01
            });
            const {
                data
            } = await $.post('ajax_workorder.php?act=unblockAll', {
                ids: ids
            }, function (res) {
                if (res.code == 1) {
                    layer.alert(res.msg, {
                        icon: 1
                    }, function () {
                        window.location.reload();
                    });
                } else {
                    layer.alert(res.msg, {
                        icon: 2
                    });
                }
            })
        });
    }

    function delAll() {
        var ids = $.map($('#listTable').bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        if (ids.length == 0) {
            layer.alert('请先选择要删除的投诉', {
                icon: 2
            });
            return false;
        }
        layer.confirm('您确定要删除这些投诉吗？', {
            icon: 3,
            title: '提示'
        }, async function (index) {
            layer.close(index);
            layer.msg('正在删除', {
                icon: 16,
                shade: 0.01
            });
            const {
                data
            } = await $.post('ajax_workorder.php?act=delAll', {
                ids: ids
            }, function (res) {
                if (res.code == 1) {
                    layer.alert(res.msg, {
                        icon: 1
                    }, function () {
                        window.location.reload();
                    });
                } else {
                    layer.alert(res.msg, {
                        icon: 2
                    });
                }
            })

        });
    }
</script>