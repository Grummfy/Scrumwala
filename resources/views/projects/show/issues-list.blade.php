<ul id="{{$issueStatus->machine_name}}" class="connectedSortable list-unstyled sprint-list">
    @foreach($list as $issue)
        <li class="ui-state-default" data-id="{{$issue->id}}">
            <a href="/issues/{{$issue->id}}">
                <span class="issue-id">#{{$issue->id}}</span>
                <span @if($issueStatus->machine_name == 'complete') class="strikethrough" @endif>
                    {{$issue->title}}
                </span>
            </a>
            @include('issues.issue.deadline')
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <img src="{{{ Identicon::getImageDataUri($issue->user->name) }}}" alt="{{{ $issue->user->name }}}" title="{{{ $issue->user->name }}}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="btn-group pull-right">
                        <span class="issue-type {{App\IssueType::findOrFail($issue->type_id)->machine_name}}">
                            {{App\IssueType::findOrFail($issue->type_id)->label}}
                        </span>
                    </div>
                </div>
            </div>
        </li>
    @endforeach
</ul>
