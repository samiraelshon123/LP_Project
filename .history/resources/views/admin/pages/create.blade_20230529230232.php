@extends('layouts.admin')
@section('content')
<style>
  .panel-heading.note-toolbar .note-style .dropdown-menu,
.panel-heading.note-toolbar .note-font .dropdown-menu {
    min-width: 245px;
    padding: 5px;
}

.panel-heading.note-toolbar .note-style .dropdown-menu > div:first-child,
.panel-heading.note-toolbar .note-font .dropdown-menu > div:first-child {

    margin-right: 5px;

}

.note-add-text-tags-btn {
    font-family: "Times New Roman", serif;
    min-width: 30px;
}
</style>
  <div class="content-wrapper" style="margin-left: 0px;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('Page.index')}}">Page Table</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">



<div class="card card-primary" style="width: 100%;">
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <div class="card-header">
        <h3 class="card-title">Add Page</h3>
    </div>
             
    <form action="{{route('Page.store')}}" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="card-body">
          <div class="row">
            <div class="form-group col-6">
                <label for="exampleInputEmail1">title</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  value="{{old('title')}}" name="title" placeholder="Enter title">
            </div>
           
            <div class="form-group col-6">
                <label for="exampleInputEmail1">slug</label>
                <input type="text" class="form-control" id="slug" value="{{old('slug')}}" name="slug" placeholder="Enter slug">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Status</label>
                <select name="status" id="" class="form-control">
                <option value="" disabled selected>Select Status</option>

                  <option value="1">Active</option>
                  <option value="0">InActive</option>

                </select>            
              </div>
              <div id="summernote">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                  <ol>
                      <li>Lorem ipsum</li>
                      <li>Lorem ipsum</li>
                      <li>Lorem ipsum</li>
                  </ol>
              </div>

              
           
            </div>
           
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</div>
        </div>

      </div>
    </section>
  </div>
@endsection

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,

            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'add-text-tags', 'clear']],
                ['misc', ['codeview']]
            ]
        });
    });

/**

 *
 */

 (function (factory) {
    /* global define */
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define(['jquery'], factory);
    } else if (typeof module === 'object' && module.exports) {
        // Node/CommonJS
        module.exports = factory(require('jquery'));
    } else {
        // Browser globals
        factory(window.jQuery);
    }
}(function ($) {

    // Extends plugins for emoji plugin.
    $.extend($.summernote.plugins, {

        'add-text-tags': function (context) {
            var self = this;
            var ui = $.summernote.ui;
            var options = context.options;

            self.generateBtn = function(tag, tooltip) {
                var char = tag.slice(0,1).toUpperCase();
                return ui.button({
                    contents: '<'+tag+'>'+char+'</'+tag+'>',
                    tooltip: tooltip + ' <' + tag + '>',
                    className: 'note-add-text-tags-btn',
                    click: function (e) {
                        self.wrapInTag(tag);
                    }
                });
            };


            var del = self.generateBtn('del', 'Deleted text');
            var ins = self.generateBtn('ins', 'Inserted text');
            var small = self.generateBtn('small', 'Fine print');
            var mark = self.generateBtn('mark', 'Highlighted text');
            var variable = self.generateBtn('var', 'Variable');
            var keyboard = self.generateBtn('kbd', 'User input');
            var code = self.generateBtn('code', 'Inline code');
            var samp = self.generateBtn('samp', 'Sample output');


            context.memo('button.add-text-tags', function () {
                return ui.buttonGroup([
                    ui.button({
                        className: 'dropdown-toggle',
                        contents: '<b>+</b> ' + ui.icon(options.icons.caret, 'span'),
                        tooltip: 'Additional text styles',
                        data: {
                            toggle: 'dropdown'
                        }
                    }),
                    ui.dropdown([
                        ui.buttonGroup({
                            className: 'note-add-text-tags-code',
                            children: [code, samp, keyboard, variable]
                        }),
                        ui.buttonGroup({
                            className: 'note-add-text-tags-other',
                            children: [mark, small, ins, del]
                        })
                    ])
                ]).render();
            });

            self.areDifferentBlockElements = function(startEl, endEl) {
                var startElDisplay = getComputedStyle(startEl, null).display;
                var endElDisplay  = getComputedStyle(endEl, null).display;

                if(startElDisplay !== 'inline' && endElDisplay !== 'inline') {
                    console.log("Can't insert across two block elements.")
                    return true;
                }
                else {
                    return false;
                }
            };

            self.isSelectionParsable = function(startEl, endEl) {

                if(startEl.isSameNode(endEl)) {
                    return true;
                }
                if( self.areDifferentBlockElements(startEl, endEl)) {
                    return false;
                }
                // if they're not different block elements, then we need to check if they share a common block ancestor
                // could do this recursively, if we want to back farther up the node chain...
                var startElParent = startEl.parentElement;
                var endElParent = endEl.parentElement;
                if( startEl.isSameNode(endElParent)
                    || endEl.isSameNode(startElParent)
                    || startElParent.isSameNode(endElParent) )
                {
                    return true;
                }
                else
                    console.log("Unable to parse across so many nodes. Sorry!")
                    return false;
            };

            self.wrapInTag = function (tag) {
                // from: https://github.com/summernote/summernote/pull/1919#issuecomment-304545919
                // https://github.com/summernote/summernote/pull/1919#issuecomment-304707418

                if (window.getSelection) {
                    var selection = window.getSelection(),
                        selected = (selection.rangeCount > 0) && selection.getRangeAt(0);

                    // Only wrap tag around selected text
                    if (selected.startOffset !== selected.endOffset) {

                        var range = selected.cloneRange();

                        var startParentElement = range.startContainer.parentElement;
                        var endParentElement = range.endContainer.parentElement;

                        // if the selection starts and ends different elements, we could be in trouble
                        if( ! startParentElement.isSameNode(endParentElement)) {
                            if ( ! self.isSelectionParsable(startParentElement, endParentElement)) {
                                return;
                            }
                        }

                        var newNode = document.createElement(tag);
                        // https://developer.mozilla.org/en-US/docs/Web/API/Range/surroundContents
                        // Parses inline nodes, but not block based nodes...blocks are handled above.
                        newNode.appendChild(range.extractContents());
                        range.insertNode(newNode)

                        // Restore the selections
                        range.selectNodeContents(newNode);
                        selection.removeAllRanges();
                        selection.addRange(range);
                    }
                }
            };
        }
    });
}));
</script>