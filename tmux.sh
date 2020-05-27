#!/bin/bash

tmux_bin=/home/work/local/tmux/bin/tmux

DEFAULT_WINDOWNAME="main-window"

# 拆分左主右从共1个工作区
function split_1_pane() {
    $tmux_bin new-session -s "$1" -d -n "$DEFAULT_WINDOWNAME"
}


# 拆分左主右从共2个工作区
function split_2_pane() {
    $tmux_bin new-session -s "$1" -d -n "$DEFAULT_WINDOWNAME"
    $tmux_bin split-window -h -p 40
    $tmux_bin select-pane -L
}

# 拆分左主右从共3个工作区
function split_3_pane() {
    $tmux_bin new-session -s "$1" -d -n "$DEFAULT_WINDOWNAME"
    $tmux_bin split-window -h -p 40
    $tmux_bin split-window -v -p 50
    $tmux_bin select-pane -L
}

# 拆分为4个同步窗口
# split_4_pane <标识符> <命令1> <命令2> <命令3> <命令4>
function split_4_pane() {
    $tmux_bin new-session -s "$1" -d -n "$DEFAULT_WINDOWNAME"
    $tmux_bin split-window -h -p 40
    $tmux_bin split-window -v -p 67
    $tmux_bin split-window -v -p 50
    $tmux_bin select-pane -L
}

# 拆分5个工作区
function split_5_pane() {
    $tmux_bin new-session -s "$1" -d -n "$DEFAULT_WINDOWNAME"
    $tmux_bin split-window -h -p 40
    $tmux_bin split-window -v -p 67
    $tmux_bin split-window -v -p 50
    $tmux_bin select-pane -L
    $tmux_bin split-window -v -p 30
    $tmux_bin select-pane -U
}


# 拆分6个工作区
function split_6_pane() {
    $tmux_bin new-session -s "$1" -d -n "$DEFAULT_WINDOWNAME"
    $tmux_bin split-window -h -p 40
    $tmux_bin split-window -v -p 75
    $tmux_bin split-window -v -p 67
    $tmux_bin split-window -v -p 50
    $tmux_bin select-pane -L
    $tmux_bin split-window -v -p 30
    $tmux_bin select-pane -U
}

# 拆分7个工作区
function split_7_pane() {
    $tmux_bin new-session -s "$1" -d -n "$DEFAULT_WINDOWNAME"
    $tmux_bin split-window -h -p 40
    $tmux_bin split-window -v -p 75
    $tmux_bin split-window -v -p 67
    $tmux_bin split-window -v -p 50
    $tmux_bin select-pane -L
    $tmux_bin split-window -v -p 40
    $tmux_bin split-window -v -p 50
    $tmux_bin select-pane -U
    $tmux_bin select-pane -U
}

# 拆分8个工作区
function split_8_pane() {
    $tmux_bin new-session -s "$1" -d -n "$DEFAULT_WINDOWNAME"
    $tmux_bin split-window -h -p 40
    $tmux_bin split-window -v -p 80
    $tmux_bin split-window -v -p 75
    $tmux_bin split-window -v -p 67
    $tmux_bin split-window -v -p 50
    $tmux_bin select-pane -L
    $tmux_bin split-window -v -p 50
    $tmux_bin split-window -v -p 50
    $tmux_bin select-pane -U
    $tmux_bin select-pane -U
}


# 拆分9个工作区
function split_9_pane() {
    $tmux_bin new-session -s "$1" -d -n "$DEFAULT_WINDOWNAME"
    $tmux_bin split-window -h -p 40
    $tmux_bin split-window -v -p 84
    $tmux_bin split-window -v -p 80
    $tmux_bin split-window -v -p 75
    $tmux_bin split-window -v -p 67
    $tmux_bin split-window -v -p 50
    $tmux_bin select-pane -L
    $tmux_bin split-window -v -p 50
    $tmux_bin split-window -v -p 50
    $tmux_bin select-pane -U
    $tmux_bin select-pane -U
}


# 拆分10个工作区
function split_10_pane() {
    $tmux_bin new-session -s "$1" -d -n "$DEFAULT_WINDOWNAME"
    $tmux_bin split-window -h -p 40
    $tmux_bin split-window -v -p 84
    $tmux_bin split-window -v -p 80
    $tmux_bin split-window -v -p 75
    $tmux_bin split-window -v -p 67
    $tmux_bin split-window -v -p 50
    $tmux_bin select-pane -L
    $tmux_bin split-window -v -p 60
    $tmux_bin split-window -v -p 67
    $tmux_bin split-window -v -p 50
    $tmux_bin select-pane -U
    $tmux_bin select-pane -U
    $tmux_bin select-pane -U
}

case $1 in
    h ) # 帮助
        #SCRIPT_DIR=$( cd "$( dirname ${BASH_SOURCE[0]} )" && pwd )
        grep -o "^\s*[-0-9a-zA-Z_]\+ ).*$" ${BASH_SOURCE[0]}
    ;;
    l ) # 列出当前会话
        $tmux_bin list-sessions
    ;;
    d ) # 删除会话
        $tmux_bin kill-session -t $2
    ;;
    n ) # 新建会话
        $tmux_bin new-session -A -s $2
    ;;
    * )
        $tmux_bin $@
    ;;
esac