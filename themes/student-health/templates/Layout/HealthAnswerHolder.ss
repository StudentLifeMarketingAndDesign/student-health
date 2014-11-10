<% if $BackgroundImage %>
	<div class="img-container" style="background-image: url($BackgroundImage.URL);">
		<div class="img-fifty-top"></div>
	</div>
<% end_if %>
<div class="gradient">
	<div class="container clearfix">
		<div class="white-cover"></div>
	    <section class="main-content <% if $BackgroundImage %>margin-top<% end_if %>">
        <h1>$Title</h1>
     
        <a href="ask-your-question/" class="">Have a question that's not listed? Ask it!</a>
				<% if SelectedTag %>
					<div class="selectedTag">
						<em>
						<% _t('VIEWINGTAGGED', 'Viewing entries tagged with') %> '$SelectedTag' <a href="$Link">View all news.</a>
						</em>
					</div>
				<% else_if SelectedDate %>
					<div class="selectedTag">
						<em>
						<% _t('VIEWINGPOSTEDIN', 'Viewing entries posted in') %> $SelectedNiceDate <a href="$Link">View all news.</a>
						</em>
					</div>
				<% end_if %>
				
				<% if BlogEntries %>
					<% loop BlogEntries %>
						<% include AnswerSummary %>
					<% end_loop %>
				<% else %>
					<p><% _t('NOENTRIES', 'There are no blog entries with this tag.') %></p>
				<% end_if %>

				
				
				<% include BlogPagination %>
        </section>
        <section class="sec-content hide-print">
        	<%-- include SideNav --%>
        	<% include BlogSideBar %>
        	<% include BreadCrumbs %>
        </section>
    </div>
</div>
<%-- <% include TopicsAndNews %> --%>